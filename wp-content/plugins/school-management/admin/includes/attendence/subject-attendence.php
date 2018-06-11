	<?php
	
	if($active_tab == 'subject_attendence')
	{ 
			
?>	 
		<div class="panel-body"> 
        <form method="post" >  
          <input type="hidden" name="class_id" value="<?php echo $class_id;?>" />
          <div class="form-group col-md-3">
			<label class="control-label" for="curr_date"><?php _e('Date','school-mgt');?></label>
			
				<input id="curr_date" class="form-control" type="text" value="<?php if(isset($_POST['curr_date'])) echo $_POST['curr_date']; else echo  date("Y-m-d");?>" name="curr_date">
			
		</div>
		<div class="form-group col-md-3">
			<label for="class_id"><?php _e('Select Class','school-mgt');?></label>			
			<?php if(isset($_REQUEST['class_id'])) $class_id=$_REQUEST['class_id']; ?>
                 
                    <select name="class_id"  id="class_list"  class="form-control ">
                        <option value=" "><?php _e('Select class Name','school-mgt');?></option>
                        <?php 
                          foreach(get_allclass() as $classdata)
                          {  
                          ?>
                           <option  value="<?php echo $classdata['class_id'];?>" <?php selected($classdata['class_id'],$class_id)?>><?php echo $classdata['class_name'];?></option>
                     <?php }?>
                    </select>
			
		</div>
		<div class="form-group col-md-3">
			<label for="class_id"><?php _e('Select Subject','school-mgt');?></label>			
			
                 <select name="sub_id"  id="subject_list"  class="form-control ">
                        <option value=" "><?php _e('Select Subject','school-mgt');?></option>
						<?php $sub_id=0;
							if(isset($_POST['sub_id'])){
									$sub_id=$_POST['sub_id'];
							  ?>
						<?php $allsubjects = smgt_get_subject_by_classid($_POST['class_id']);
                         foreach($allsubjects as $subjectdata)
                          {?>
							<option value="<?php echo $subjectdata->subid;?>" <?php selected($subjectdata->subid,$sub_id); ?>><?php echo $subjectdata->sub_name;?></option>
                     <?php }
						}
					  ?>
                    </select>
			
		</div>
		 <div class="form-group col-md-3 button-possition">
    	<label for="subject_id">&nbsp;</label>
      	<input type="submit" value="<?php _e('Take/View  Attendance','school-mgt');?>" name="attendence"  class="btn btn-success"/>
    </div>
       
          </form>
		  </div>
           <div class="clearfix"> </div>
         <?php 
         if(isset($_REQUEST['attendence']) || isset($_REQUEST['save_sub_attendence']))
         {
         	if(isset($_REQUEST['class_id']) && $_REQUEST['class_id'] != " ")
                $class_id =$_REQUEST['class_id'];
         		else 
         			$class_id = 0;
         		if($class_id == 0)
         		{
         		?>
         		<div class="panel-heading">
         	<h4 class="panel-title"><?php _e('Please Select Class','school-mgt');?></h4>
         </div>
         		<?php          		}
         		else{
                
                $student = get_users(array('meta_key' => 'class_name', 'meta_value' => $class_id,'role'=>'student'));?>
               <div class="panel-body">  
            <form method="post"  class="form-horizontal">  
          
         
          <input type="hidden" name="class_id" value="<?php echo $class_id;?>" />
          <input type="hidden" name="sub_id" value="<?php echo $sub_id;?>" />
          <input type="hidden" name="curr_date" value="<?php if(isset($_POST['curr_date'])) echo $_POST['curr_date']; else echo  date("Y-m-d");?>" />
        
         <div class="panel-heading">
         	<h4 class="panel-title"> <?php _e('Class')?> : <?php echo get_class_name($class_id);?> , 
         	<?php _e('Date')?> : <?php echo $_POST['curr_date'];?>,<?php _e('Subject')?> : <?php echo get_subject_byid($_POST['sub_id']); ?></h4>
         </div>
        
          <div class="col-md-12">
        <table class="table">
            <tr><!--  
                <?php if($_REQUEST['curr_date'] == date("Y-m-d")){?> 
                   <th width="100px"><input type="checkbox" name="selectall" id="selectall"/></th>
                  <th width="100px"><?php _e('Status','school-mgt');?></th>
                  <?php }
                  else {
                  	?>
                  	<th width="100px"><?php _e('Status','school-mgt');?></th>
                  	<?php 
                  	
                  }  ?>-->
                  <th><?php _e('Srno','school-mgt');?></th>
				  <th><?php _e('Roll No.','school-mgt');?></th>
                <th><?php _e('Student Name','school-mgt');?></th>
                 <th><?php _e('Attendance','school-mgt');?></th>
				   <th><?php _e('Comment','school-mgt');?></th>
            </tr>
            <?php
            $date = $_POST['curr_date'];
            $i = 1;

             foreach ( $student as $user ) {
            	$date = $_POST['curr_date'];
                   
                    $check_attendance = $obj_attend->check_sub_attendence($user->ID,$class_id,$date,$_POST['sub_id']);
                   
                    $attendanc_status = "Present";
                    if(!empty($check_attendance))
                    {
                    	$attendanc_status = $check_attendance->status;
                    	
                    }
                   
                echo '<tr>';
              
                echo '<td>'.$i.'</td>';
				echo '<td><span>' .get_user_meta($user->ID, 'roll_id',true). '</span></td>';
                echo '<td><span>' .$user->first_name.' '.$user->last_name. '</span></td>';
                ?>
                <td><label class="radio-inline"><input type="radio" name = "attendanace_<?php echo $user->ID?>" value ="Present" <?php checked( $attendanc_status, 'Present' );?>>
                <?php _e('Present','school-mgt');?></label>
				<label class="radio-inline"> <input type="radio" name = "attendanace_<?php echo $user->ID?>" value ="Absent" <?php checked( $attendanc_status, 'Absent' );?>>
				<?php _e('Absent','school-mgt');?></label>
				<label class="radio-inline"><input type="radio" name = "attendanace_<?php echo $user->ID?>" value ="Late" <?php checked( $attendanc_status, 'Late' );?>>
				<?php _e('Late','school-mgt');?></label></td>
				<td><input type="text" name="attendanace_comment_<?php echo $user->ID?>" class="form-control" value="<?php if($check_attendance->comment!='') echo $check_attendance->comment;?>"></td><?php 
                
                echo '</tr>';
                $i++;}?>
                   
					</table>
					<div class="form-group">
			<label class="col-sm-4 control-label " for="enable"><?php _e('If student absent then Send  SMS to his/her parents','school-mgt');?></label>
			<div class="col-sm-2">
				 <div class="checkbox">
				 	<label>
  						<input id="chk_sms_sent1" type="checkbox" <?php $smgt_sms_service_enable = 0;if($smgt_sms_service_enable) echo "checked";?> value="1" name="smgt_sms_service_enable">
  					</label>
  				</div>
				 
			</div>
		</div>
		
					</div>
					<div class="col-sm-12"> 
					<?php if($_REQUEST['curr_date'] == date("Y-m-d")){?>       	
        	<input type="submit" value="Save  Attendance" name="save_sub_attendence" class="btn btn-success" />
        	<?php }?>
        </div>
       
        </form>	</div>
        <?php }
         }
	}
        ?>