<?php 
$role='teacher';
	if(isset($_POST['save_teacher']))
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
	$attechment='';
	if(!empty($_POST['attachment']))
	{
		$attechment=implode(',',$_POST['attachment']);
	}
	$usermetadata=array('middle_name'=>$_POST['middle_name'],
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
						'working_hour'=>$_POST['working_hour'],
						'possition'=>$_POST['possition'],
						'smgt_user_avatar'=>$photo,
						'attachment'=>$attechment
	);
	
	if($_REQUEST['action']=='edit')
	{
		
		$userdata['ID']=$_REQUEST['teacher_id'];
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
		 $result=add_newuser($userdata,$usermetadata,$firstname,$lastname,$role);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
					<p><?php _e('record successfully inserted!','school-mgt');?></p>
				</div>
	  <?php }
		}
		else 
		{
			?>
											<div id="message" class="updated below-h2">
														<p><p><?php _e('Username Or Emailid All Ready Exist.','school-mgt');?></p></p>
													</div>
											<?php 
		}
	}
		
	
}

	
	if(isset($_REQUEST['action'])&& $_REQUEST['action']=='delete')
		{
			
			$result=delete_usedata($_REQUEST['teacher_id']);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
					<p><?php _e('record successfully delete!','school-mgt');?></p>
				</div>
		<?php 
			}
		}
	?>
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
<div class="page-inner" style="min-height:1631px !important">
	<div class="page-title"> 
		<h3><img src="<?php echo get_option( 'smgt_school_logo' ) ?>" class="img-circle head_logo" width="40" height="40" /><?php echo get_option( 'smgt_school_name' );?></h3>
	</div>
	<div id="main-wrapper">
		<div class="row">
			<div class="panel panel-white">
				<div class="panel-body">
				<h2 class="nav-tab-wrapper">
			    	<a href="?page=sm_student&attendance=1" class="nav-tab nav-tab-active">
					<?php echo '<span class="dashicons dashicons-menu"></span>'.__('View Attendance', 'school-mgt'); ?></a>
				</h2>
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
	</div>
</div>
<?php 

}
else 
{
?>
	<?php
$active_tab = isset($_GET['tab'])?$_GET['tab']:'teacherlist';
	
	?>


<div class="page-inner" style="min-height:1631px !important">
<div class="page-title">
		<h3><img src="<?php echo get_option( 'smgt_school_logo' ) ?>" class="img-circle head_logo" width="40" height="40" /><?php echo get_option( 'smgt_school_name' );?></h3>
	</div>
	<div id="main-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-white">
					<div class="panel-body">
	<h2 class="nav-tab-wrapper">
    	<a href="?page=smgt_teacher&tab=teacherlist" class="nav-tab <?php echo $active_tab == 'teacherlist' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-menu"></span>'.__('Teacher List', 'school-mgt'); ?></a>
    	
        <?php if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
		{?>
        <a href="?page=smgt_teacher&tab=addteacher&&action=edit&teacher_id=<?php echo $_REQUEST['teacher_id'];?>" class="nav-tab <?php echo $active_tab == 'addteacher' ? 'nav-tab-active' : ''; ?>">
		<?php _e('Edit Teacher', 'school-mgt'); ?></a>  
		<?php 
		}
		else
		{?>
			<a href="?page=smgt_teacher&tab=addteacher" class="nav-tab <?php echo $active_tab == 'addteacher' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-plus-alt"></span>'.__('Add New Teacher', 'school-mgt'); ?></a>  
		<?php }?>
       
    </h2>
     <?php 
	//Report 1 
	if($active_tab == 'teacherlist')
	{ 
	
	?>	
    
    <form name="wcwm_report" action="" method="post">
    
        <div class="panel-body">
        	<div class="table-responsive">
        <table id="example" class="display" cellspacing="0" width="100%">
        	 <thead>
            <tr>
			<th><?php  _e( 'Photo', 'school-mgt' ) ;?></th>
              <th><?php _e( 'Teacher Name', 'school-mgt' ) ;?></th>
			  <th> <?php _e( 'Class', 'school-mgt' ) ;?></th>
			  <th> <?php _e( 'Subject', 'school-mgt' ) ;?></th>
                <th> <?php _e( 'Teacher Email', 'school-mgt' ) ;?></th>
                <th><?php  _e( 'Action', 'school-mgt' ) ;?></th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
				<th><?php  _e( 'Photo', 'school-mgt' ) ;?></th>
              <th><?php _e( 'Teacher Name', 'school-mgt' ) ;?></th>
			  <th> <?php _e( 'Class', 'school-mgt' ) ;?></th>
			  <th> <?php _e( 'Subject', 'school-mgt' ) ;?></th>
                <th> <?php _e( 'Teacher Email', 'school-mgt' ) ;?></th>
                <th><?php  _e( 'Action', 'school-mgt' ) ;?></th>
                
            </tr>
        </tfoot>
 
        <tbody>
         <?php 
		$teacherdata=get_usersdata('teacher');
		 if(!empty($teacherdata))
		 {
		 	foreach (get_usersdata('teacher') as $retrieved_data){ 
			
			
		 ?>
            <tr>
				<td class="user_image"><?php $uid=$retrieved_data->ID;
							$umetadata=get_user_image($uid);
		 	if(empty($umetadata['meta_value']))
									{
										echo '<img src='.get_option( 'smgt_teacher_thumb' ).' height="50px" width="50px" class="img-circle" />';
									}
							else
							echo '<img src='.$umetadata['meta_value'].' height="50px" width="50px" class="img-circle"/>';
				?></td>
                <td class="name"><a href="?page=smgt_teacher&tab=addteacher&action=edit&teacher_id=<?php echo $retrieved_data->ID;?>"><?php echo $retrieved_data->display_name;?></a></td>
                <td class="class_name">
				<?php 
						$class_id=get_user_meta($uid, 'class_name', true);
						echo $classname=	get_class_name($class_id);
				?></td>
				<td class="subject_name"><?php echo $subjectname=get_subject_name_by_teacher($uid);?></td>
                <td class="email"><?php echo $retrieved_data->user_email;?></td>
               	<td class="action"> <a href="?page=smgt_teacher&tab=addteacher&action=edit&teacher_id=<?php echo $retrieved_data->ID;?>" class="btn btn-info"> <?php _e('Edit', 'school-mgt' ) ;?></a>
                <a href="?page=smgt_teacher&tab=teacherlist&action=delete&teacher_id=<?php echo $retrieved_data->ID;?>" class="btn btn-danger" 
                onclick="return confirm('<?php _e('Are you sure you want to delete this record?','school-mgt');?>');">
                <?php _e( 'Delete', 'school-mgt' ) ;?> </a>
                <a href="?page=smgt_teacher&student_id=<?php echo $retrieved_data->ID;?>&attendance=1" class="btn btn-default">
               <i class="fa fa-eye"></i> <?php _e('View Attendance','school-mgt');?></a>
                </td>
               
            </tr>
            <?php } 
			
		}?>
     
        </tbody>
        
        </table>
        </div>
        </div>
       
</form>
     <?php 
	 }
	
	if($active_tab == 'addteacher')
	 {
	require_once SMS_PLUGIN_DIR. '/admin/includes/teacher/add-newteacher.php';
	 }
	 ?>
</div>
			
		</div>
	</div>
</div>
<?php } ?>