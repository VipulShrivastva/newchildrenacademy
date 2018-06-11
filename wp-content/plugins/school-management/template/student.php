	<?php 
$obj_mark = new Marks_Manage();
$active_tab=isset($_REQUEST['tab'])?$_REQUEST['tab']:'studentlist';
$role='student';
if(isset($_POST['save_student']))
{

	$firstname=$_POST['first_name'];
	$lastname=$_POST['last_name'];
	$userdata = array(
			'user_login'=>$_POST['username'],
			'user_nicename'=>NULL,
			'user_email'=>$_POST['email'],
			'user_url'=>NULL,
			'display_name'=>$firstname." ".$lastname,
	);
	if($_POST['password'] != "")
		$userdata['user_pass']=$_POST['password'];
		
	if(isset($_POST['smgt_user_avatar']) && $_POST['smgt_user_avatar'] != "")
	{
		$photo=$_POST['smgt_user_avatar'];

	}
	else
	{
		$photo="";
	}
	$usermetadata=array('roll_id'=>$_POST['roll_id'],
			'middle_name'=>$_POST['middle_name'],
			'gender'=>$_POST['gender'],
			'birth_date'=>$_POST['birth_date'],
			'address'=>$_POST['address'],
			'city'=>$_POST['city_name'],
			'state'=>$_POST['state_name'],
			'zip_code'=>$_POST['zip_code'],
			'class_name'=>$_POST['class_name'],
			'phone'=>$_POST['phone'],
			'mobile_number'=>$_POST['mobile_number'],
			'alternet_mobile_number'=>$_POST['alternet_mobile_number'],
			'smgt_user_avatar'=>$photo,

	);
	$userbyroll_no=get_users(
			array('meta_query'=>
					array('relation' => 'AND',
							array('key'=>'class_name','value'=>$_POST['class_name']),
							array('key'=>'roll_id','value'=>$_POST['roll_id'])
					),
					'role'=>'student'));
	$is_rollno = count($userbyroll_no);
	if($_REQUEST['action']=='edit')
	{

		$userdata['ID']=$_REQUEST['student_id'];

		$result=update_user($userdata,$usermetadata,$firstname,$lastname,$role);
		if($result)
			{?>
				<div id="message" class="updated below-h2">
					<p><?php _e('record successfully Updated!','school-mgt');?></p>
				</div>
	  <?php }
		
					
	}
	else
	{
		if( !email_exists( $_POST['email'] ) && !username_exists( $_POST['username'] )) {
			
			if($is_rollno)
			{
				?>
						<div id="message" class="updated below-h2">
								<p><?php _e('Roll No All Ready Exist!','school-mgt');?></p>
							</div>
						<?php 
					}
					else {
		 $result=add_newuser($userdata,$usermetadata,$firstname,$lastname,$role);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('Record successfully inserted!','school-mgt');?></p>
					</div>
	  <?php }
					}
		}
		else {
			?>
			<div id="message" class="updated below-h2">
						<p><?php _e('Username Or Emailid All Ready Exist','school-mgt');?></p>
					</div>
			<?php 
		}
	 
	}
		
}
?>
<script>
jQuery(document).ready(function() {
	jQuery('#student_list').DataTable({
        responsive: true
    });
} );
</script>
<!-- POP up code -->
<div class="popup-bg">
    <div class="overlay-content">
   
     <div class="result"></div>
      <div class="view-parent"></div>
   
    </div> 
    </div>
<?php 

if(isset($_REQUEST['attendance']) && $_REQUEST['attendance'] == 1)
{
	?>
	<script type="text/javascript">
$(document).ready(function() {
	
	$('.sdate').datepicker({dateFormat: "yy-mm-dd"}); 
	$('.edate').datepicker({dateFormat: "yy-mm-dd"}); 

 
} );
</script>
	<div class="panel-body panel-white">
 <ul class="nav nav-tabs panel_tabs" role="tablist">
      <li class="active">
          <a href="#child" role="tab" data-toggle="tab">
             <i class="fa fa-align-justify"></i> <?php _e('Attendance', 'school-mgt'); ?></a>
          </a>
      </li>
</ul>
   

<div class="tab-content">
      
        	<div class="panel-body">
<form name="wcwm_report" action="" method="post">
<input type="hidden" name="attendance" value=1> 
<input type="hidden" name="user_id" value=<?php echo $_REQUEST['student_id'];?>>       
	<div class="form-group col-md-3">
    	<label for="exam_id"><?php _e('Strat Date','school-mgt');?></label>
       
					
            	<input type="text"  class="form-control sdate" name="sdate" value="<?php if(isset($_REQUEST['sdate'])) echo $_REQUEST['sdate'];else echo date('Y-m-d');?>">
            	
    </div>
    <div class="form-group col-md-3">
    	<label for="exam_id"><?php _e('End Date','school-mgt');?></label>
			<input type="text"  class="form-control edate" name="edate" value="<?php if(isset($_REQUEST['edate'])) echo $_REQUEST['edate'];else echo date('Y-m-d');?>">
            	
    </div>
    <div class="form-group col-md-3 button-possition">
    	<label for="subject_id">&nbsp;</label>
      	<input type="submit" name="view_attendance" Value="<?php _e('Go','school-mgt');?>"  class="btn btn-info"/>
    </div>	
</form>
<div class="clearfix"></div>
<?php if(isset($_REQUEST['view_attendance']))
{
	$start_date = $_REQUEST['sdate'];
	$end_date = $_REQUEST['edate'];
	$user_id = $_REQUEST['user_id'];
	$attendance = smgt_view_student_attendance($start_date,$end_date,$user_id);
	
	$curremt_date =$start_date;
	?>
	
	<table class="table col-md-12">
	<tr>
	<th width="200px"><?php _e('Date','school-mgt');?></th>
	<th><?php _e('Day','school-mgt');?></th>
	<th><?php _e('Attendance','school-mgt');?></th>
	</tr>
	<?php 
	while ($end_date >= $curremt_date)
	{
		echo '<tr>';
		echo '<td>';
		echo $curremt_date;
		echo '</td>';
		
		$attendance_status = smgt_get_attendence($user_id,$curremt_date);
		echo '<td>';
		echo date("D", strtotime($curremt_date));
		echo '</td>';
		
		if(!empty($attendance_status))
		{
			echo '<td>';
			echo smgt_get_attendence($user_id,$curremt_date);
			echo '</td>';
		}
		else 
		{
			echo '<td>';
			echo __('Absent','school-mgt');
			echo '</td>';
		}
		
		echo '</tr>';
		$curremt_date = strtotime("+1 day", strtotime($curremt_date));
		$curremt_date = date("Y-m-d", $curremt_date);
	}
?>
</table>

<?php }?>
</div>
</div>
</div>
	<?php 
}
else 
{?>

<div class="panel-body panel-white">
 <ul class="nav nav-tabs panel_tabs" role="tablist">
      <li class="<?php if($active_tab=='studentlist'){?>active<?php }?>">
          <a href="?dashboard=user&page=student&tab=studentlist">
             <i class="fa fa-align-justify"></i> <?php _e('Student List', 'school-mgt'); ?></a>
          </a>
      </li>
      <?php if($school_obj->role == 'supportstaff'){?>
       <li class="<?php if($active_tab=='addstudent'){?>active<?php }?>">
          <a href="?dashboard=user&page=student&tab=addstudent">
             <i class="fa fa-align-justify"></i> 
             <?php 
             if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
             	_e('Edit Student', 'school-mgt');
             else 
             	_e('Add Student', 'school-mgt');
              ?></a>
          </a>
      </li>
      <?php }?>
</ul>

 <div class="tab-content">
     <?php if($active_tab == 'studentlist')
     {
     ?>
		 <div class="panel-body"> 
        <form method="post">  
	<div class="form-group col-md-3" style="display: none;">
			<label for="class_id"><?php _e('Select Class','school-mgt');?></label>			
			<?php $class_id="";
			if(isset($_REQUEST['class_id'])) $class_id=$_REQUEST['class_id']; ?>
                 
                    <select name="class_id"  id="filter_class_id"  class="form-control " >
                        <option value=" "><?php _e('Select class Name','school-mgt');?></option>
                        <?php 
                          foreach(get_allclass() as $classdata)
                          {  
                          ?>
                           <option  value="<?php echo $classdata['class_id'];?>" <?php selected($classdata['class_id'],$class_id)?>><?php echo $classdata['class_name'];?></option>
                     <?php }?>
                    </select>
			
		</div>
		 <div class="form-group col-md-3 button-possition" style="display: none;">
    	<label for="subject_id">&nbsp;</label>
      	<input type="submit" value="<?php _e('Go','school-mgt');?>" name="filter_class"  class="btn btn-info"/>
    </div>
       
          </form>
		  </div>
		 <?php  if(isset($_REQUEST['filter_class']) )
				 {
					if(isset($_REQUEST['class_id']) && $_REQUEST['class_id'] != " "){
						$class_id =$_REQUEST['class_id'];
						 $studentdata = get_users(array('meta_key' => 'class_name', 'meta_value' => $class_id,'role'=>'student'));	
						}
						
				 }	
				 else 
				{
					$studentdata =$school_obj->student;
				}
         		?>

	 
	 
		<div class="panel-body">
		<div class="table-responsive">
        <table id="student_list" class="display dataTable" cellspacing="0" width="100%">
        	 <thead>
            <tr>
				<th><?php echo _e( 'Photo', 'school-mgt' ) ;?></th>
                <th><?php echo _e( 'Student Name', 'school-mgt' ) ;?></th>
				 <th> <?php echo _e( 'Roll No.', 'school-mgt' ) ;?></th>
                <th> <?php echo _e( 'Student Email', 'school-mgt' ) ;?></th>
				<th> <?php echo _e( 'Class', 'school-mgt' ) ;?></th>
				
				
                 <th><?php echo _e( 'Action', 'school-mgt' ) ;?></th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
				<th><?php echo _e( 'Photo', 'school-mgt' ); ?></th>
                <th><?php echo _e( 'Student Name', 'school-mgt' ) ;?></th>
				 <th> <?php echo _e( 'Roll No.', 'school-mgt' ) ;?></th>
                <th> <?php echo _e( 'Student Email', 'school-mgt' ) ;?></th>
				<th> <?php echo _e( 'Class', 'school-mgt' ) ;?></th>
				 <th><?php echo _e( 'Action', 'school-mgt' ) ;?></th>
                
            </tr>
        </tfoot>
 
        <tbody>
         <?php 
		 if(!empty($studentdata))
			{
		 	foreach ($studentdata as $retrieved_data){ 
			
			
		 ?>
            <tr>
				<td class="user_image text-center"><?php $uid=$retrieved_data->ID;
							$umetadata=get_user_image($uid);
							if(empty($umetadata['meta_value'])){
								echo '<img src='.get_option( 'smgt_student_thumb' ).' height="50px" width="50px" class="img-circle" />';
							}
							else
							echo '<img src='.$umetadata['meta_value'].' height="50px" width="50px" class="img-circle"/>';
				?></td>
                <td class="name"><?php echo $retrieved_data->display_name;?></td>
				<td class="roll_no"><?php echo get_user_meta($retrieved_data->ID, 'roll_id',true);?></td>
				<td class="email"><?php echo $retrieved_data->user_email;?></td>
				<td class="name"><?php $class_id=get_user_meta($retrieved_data->ID, 'class_name',true);
									echo $classname=	get_class_name($class_id);
				?></td>
                
                
               	<td class="action"> 
               	<?php 
               	
               		if($school_obj->role == 'student')
               		{
               			if($retrieved_data->ID == get_current_user_id())
               			{
               	?>                    <a href="?dashboard=user&page=student&action=result&student_id=<?php echo $retrieved_data->ID;?>" class="show-popup btn btn-default" 
                                    idtest="<?php echo $retrieved_data->ID; ?>"><i class="fa fa-bar-chart"></i> <?php _e('View Result', 'school-mgt');?></a> 
                                    <a href="?dashboard=user&page=student&tab=studentlist&action=showparent&student_id=<?php echo $retrieved_data->ID;?>" class="show-parent btn btn-default" 
                                    idtest="<?php echo $retrieved_data->ID; ?>"><i class="fa fa-user"></i> <?php _e('View Parent', 'school-mgt');?></a>
                                     <a href="?dashboard=user&page=student&student_id=<?php echo $retrieved_data->ID;?>&attendance=1" class="btn btn-default"  
                                    idtest="<?php echo $retrieved_data->ID; ?>"><i class="fa fa-eye"></i> <?php _e('View Attendance','school-mgt');?> </a>
                                    <?php
               			}
               		}
                    else 
                    {
                                    	?>
                                    	<a href="?dashboard=user&page=student&action=result&student_id=<?php echo $retrieved_data->ID;?>" class="show-popup btn btn-default" 
                                    idtest="<?php echo $retrieved_data->ID; ?>"><i class="fa fa-bar-chart"></i> <?php _e('View Result', 'school-mgt');?></a> 
                                    <a href="?dashboard=user&page=student&tab=studentlist&action=showparent&student_id=<?php echo $retrieved_data->ID;?>" class="show-parent btn btn-default" 
                                    idtest="<?php echo $retrieved_data->ID; ?>"><i class="fa fa-user"></i> <?php _e('View Parent', 'school-mgt');?></a>
                                    <a href="?dashboard=user&page=student&student_id=<?php echo $retrieved_data->ID;?>&attendance=1" class="btn btn-default"  
                                    idtest="<?php echo $retrieved_data->ID; ?>"><i class="fa fa-eye"></i> <?php _e('View Attendance','school-mgt');?> </a>
                                    	<?php 
                                    	if($school_obj->role == 'supportstaff')
                                    	{
                                    	?>
                                    	<a href="?dashboard=user&page=student&tab=addstudent&action=edit&student_id=<?php echo $retrieved_data->ID;?>" class="btn btn-info"><?php _e('Edit', 'school-mgt');?></a>
                                    	<?php 
                                    	}
                                    }?>
                </td>
               
            </tr>	
            <?php } 
			
			}?>
     
        </tbody>
        
        </table>
        </div>
       
	</div>
	<?php }
	
	if($active_tab == 'addstudent')
	{
		$role='student';
		$edit=0;
		if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit'){
				
			$edit=1;
			$user_info = get_userdata($_REQUEST['student_id']);
				
		}
		?>
	<script type="text/javascript">

$(document).ready(function() {
	$('#student_form').validationEngine();
	 
	  $('#birth_date').datepicker({
		  changeMonth: true,
	        changeYear: true,
	        yearRange:'-65:+25',
	        onChangeMonthYear: function(year, month, inst) {
	            $(this).val(month + "/" + year);
	        }
                    
                }); 

} );
</script>
		  <div class="panel-body">
        <form name="student_form" action="" method="post" class="form-horizontal" id="student_form">
         <?php $action = isset($_REQUEST['action'])?$_REQUEST['action']:'insert';?>
		<input type="hidden" name="action" value="<?php echo $action;?>">
		<input type="hidden" name="role" value="<?php echo $role;?>"  />
		<div class="form-group">
			<label class="col-sm-2 control-label" for="class_name"><?php _e('Class','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<?php if($edit){ $classval=$user_info->class_name; }elseif(isset($_POST['class_name'])){$classval=$_POST['class_name'];}else{$classval='';}?>
                        <select name="class_name" class="form-control validate[required]" id="class_name">
                        	<option value=""><?php _e('Select Class','school-mgt');?></option>
                            <?php
								foreach(get_allclass() as $classdata)
								{  
								?>
								 <option value="<?php echo $classdata['class_id'];?>" <?php selected($classval, $classdata['class_id']);  ?>><?php echo $classdata['class_name'];?></option>
							<?php }?>
                        </select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="roll_id"><?php _e('Roll Number','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<input id="roll_id" class="form-control validate[required]" type="text" 
				value="<?php if($edit){ echo $user_info->roll_id;}elseif(isset($_POST['roll_id'])) echo $_POST['roll_id'];?>"  <?php if($edit) echo "readonly";?> name="roll_id">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="first_name"><?php _e('First Name','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<input id="first_name" class="form-control validate[required,custom[onlyLetterSp]] text-input" type="text" value="<?php if($edit){ echo $user_info->first_name;}elseif(isset($_POST['first_name'])) echo $_POST['first_name'];?>" name="first_name">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="middle_name"><?php _e('Middle Name','school-mgt');?></label>
			<div class="col-sm-8">
				<input id="middle_name" class="form-control " type="text"  value="<?php if($edit){ echo $user_info->middle_name;}elseif(isset($_POST['middle_name'])) echo $_POST['middle_name'];?>" name="middle_name">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="last_name"><?php _e('Last Name','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<input id="last_name" class="form-control validate[required,custom[onlyLetterSp]] text-input" type="text"  value="<?php if($edit){ echo $user_info->last_name;}elseif(isset($_POST['last_name'])) echo $_POST['last_name'];?>" name="last_name">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="gender"><?php _e('Gender','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
			<?php $genderval = "male"; if($edit){ $genderval=$user_info->gender; }elseif(isset($_POST['gender'])) {$genderval=$_POST['gender'];}?>
				<label class="radio-inline">
			     <input type="radio" value="male" class="tog validate[required]" name="gender"  <?php  checked( 'male', $genderval);  ?>/><?php _e('Male','school-mgt');?>
			    </label>
			    <label class="radio-inline">
			      <input type="radio" value="female" class="tog validate[required]" name="gender"  <?php  checked( 'female', $genderval);  ?>/><?php _e('Female','school-mgt');?> 
			    </label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="birth_date"><?php _e('Date of birth','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<input id="birth_date" class="form-control validate[required]" type="text"  name="birth_date" 
				value="<?php if($edit){ echo $user_info->birth_date;}elseif(isset($_POST['birth_date'])) echo $_POST['birth_date'];?>">
			</div>
		</div>		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="address"><?php _e('Address','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<input id="address" class="form-control validate[required]" type="text"  name="address" 
				value="<?php if($edit){ echo $user_info->address;}elseif(isset($_POST['address'])) echo $_POST['address'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="city_name"><?php _e('City','school');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<input id="city_name" class="form-control validate[required]" type="text"  name="city_name" 
				value="<?php if($edit){ echo $user_info->city;}elseif(isset($_POST['city_name'])) echo $_POST['city_name'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="state_name"><?php _e('State','school-mgt');?></label>
			<div class="col-sm-8">
				<input id="state_name" class="form-control" type="text"  name="state_name" 
				value="<?php if($edit){ echo $user_info->state;}elseif(isset($_POST['state_name'])) echo $_POST['state_name'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="zip_code"><?php _e('Zip Code','school');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<input id="zip_code" class="form-control  validate[required,custom[onlyLetterNumber]]" type="text"  name="zip_code" 
				value="<?php if($edit){ echo $user_info->zip_code;}elseif(isset($_POST['zip_code'])) echo $_POST['zip_code'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="mobile_number"><?php _e('Mobile Number','school-mgt');?></label>
			<div class="col-sm-1">
			
			<input type="text" readonly value="+<?php echo smgt_get_countery_phonecode(get_option( 'smgt_contry' ));?>"  class="form-control" name="phonecode">
			</div>
			<div class="col-sm-7">
				<input id="mobile_number" class="form-control text-input" type="text"  name="mobile_number"
				value="<?php if($edit){ echo $user_info->mobile_number;}elseif(isset($_POST['mobile_number'])) echo $_POST['mobile_number'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="mobile_number"><?php _e('Alternet Mobile Number','school-mgt');?></label>
			<div class="col-sm-1">
			
			<input type="text" readonly value="+<?php echo smgt_get_countery_phonecode(get_option( 'smgt_contry' ));?>"  class="form-control" name="alter_mobile_number">
			</div>
			<div class="col-sm-7">
				<input id="alternet_mobile_number" class="form-control text-input" type="text"  name="alternet_mobile_number" maxlength="10"
				value="<?php if($edit){ echo $user_info->alternet_mobile_number;}elseif(isset($_POST['alternet_mobile_number'])) echo $_POST['alternet_mobile_number'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label " for="phone"><?php _e('Phone','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<input id="phone" class="form-control validate[,custom[phone]] text-input" type="text"  name="phone" 
				value="<?php if($edit){ echo $user_info->phone;}elseif(isset($_POST['phone'])) echo $_POST['phone'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label " for="email"><?php _e('Email','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<input id="email" class="form-control validate[required,custom[email]] text-input" type="text"  name="email" 
				value="<?php if($edit){ echo $user_info->user_email;}elseif(isset($_POST['email'])) echo $_POST['email'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="username"><?php _e('User Name','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<input id="username" class="form-control validate[required]" type="text"  name="username" 
				value="<?php if($edit){ echo $user_info->user_login;}elseif(isset($_POST['username'])) echo $_POST['username'];?>" <?php if($edit) echo "readonly";?>>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="password"><?php _e('Password','school-mgt');?><?php if(!$edit) {?><span class="require-field">*</span><?php }?></label>
			<div class="col-sm-8">
				<input id="password" class="form-control <?php if(!$edit) echo 'validate[required]';?>" type="password"  name="password" value="">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="photo"><?php _e('Image','school-mgt');?></label>
			<div class="col-sm-2">
				
				<input type="text" id="smgt_user_avatar_url" class="form-control" name="smgt_user_avatar"  
				value="<?php if($edit)echo esc_url( $user_info->smgt_user_avatar );elseif(isset($_POST['smgt_user_avatar'])) echo $_POST['smgt_user_avatar']; ?>" />
				
			</div>	
				<div class="col-sm-3">
       				 <input id="upload_user_avatar_button" type="button" class="button" value="<?php _e( 'Upload image', 'school-mgt' ); ?>" />
       				 <span class="description"><?php _e('Upload image', 'school-mgt' ); ?></span>
       		
			</div>
			<div class="clearfix"></div>
			
			<div class="col-sm-offset-2 col-sm-8">
                     <div id="upload_user_avatar_preview" >
	                     <?php if($edit) 
	                     	{
	                     	if($user_info->smgt_user_avatar == "")
	                     	{?>
	                     	<img alt="" src="<?php echo get_option( 'smgt_student_thumb' ) ?>">
	                     	<?php }
	                     	else {
	                     		?>
					        <img style="max-width:100%;" src="<?php if($edit)echo esc_url( $user_info->smgt_user_avatar ); ?>" />
					        <?php 
	                     	}
	                     	}
					        else {
					        	?>
					        	<img alt="" src="<?php echo get_option( 'smgt_student_thumb' ) ?>">
					        	<?php 
					        }?>
    				</div>
   		 </div>
		</div>
		<div class="col-sm-offset-2 col-sm-8">
        	
        	<input type="submit" value="<?php if($edit){ _e('Save Student','school-mgt'); }else{ _e('Add Student','school-mgt');}?>" name="save_student" class="btn btn-success"/>
        </div>
          	
        
        </form>
        </div>
		<?php 
	}
	?>
	

</div>
</div>
<?php }?>