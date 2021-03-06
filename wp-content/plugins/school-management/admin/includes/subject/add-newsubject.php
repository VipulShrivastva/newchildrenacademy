<?php
//add new subject

?>
<script type="text/javascript">

$(document).ready(function() {
	$('#subject_form').validationEngine();
} );
</script>
		<?php 	$edit=0;
					if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
					{	
						$edit=1;
						$subject=get_subject($_REQUEST['subject_id']);
					}
?>
        <div class="panel-body">
        <form name="student_form" action="" method="post" class="form-horizontal" enctype="multipart/form-data" id="subject_form">
         <?php $action = isset($_REQUEST['action'])?$_REQUEST['action']:'insert';?>
		<input type="hidden" name="action" value="<?php echo $action;?>">
		<div class="form-group">
			<label class="col-sm-2 control-label" for="subject_name"><?php _e('Subject Name','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<input id="subject_name" class="form-control validate[required]" type="text" value="<?php if($edit){ echo $subject->sub_name;}?>" name="subject_name">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="subject_class"><?php _e('Class','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<?php if($edit){ $classval=$subject->class_id; }else{$classval='';}?>
                        <select name="subject_class" class="form-control validate[required]" id="subject_class">
                        	<option value=""><?php echo _e( 'Select Class', 'school-mgt' ) ;?></option>
                            <?php
								foreach(get_allclass() as $classdata)
								{ ?>
								 <option value="<?php echo $classdata['class_id'];?>" <?php selected($classval, $classdata['class_id']);  ?>><?php echo $classdata['class_name'];?></option>
							<?php }?>
                        </select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="subject_teacher"><?php _e('Teacher','school-mgt');?><span class="require-field">*</span></label>
			<div class="col-sm-8">
				<?php if($edit){ $teachval=$subject->teacher_id; }else{$teachval='';}?>
                        <select name="subject_teacher" id="subject_teacher" class="form-control validate[required]">
                        	<option value=""><?php echo _e( 'Select Teacher', 'school-mgt' ) ;?></option>
                           <?php 
                            	foreach(get_usersdata('teacher') as $teacherdata)
								{ ?>
								 <option value="<?php echo $teacherdata->ID;?>" <?php selected($teachval, $teacherdata->ID);  ?>><?php echo $teacherdata->display_name;?></option>
							<?php }?>
                        </select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="subject_edition"><?php _e('Edition','school-mgt');?></label>
			<div class="col-sm-8">
				<input id="subject_edition" class="form-control" type="text" value="<?php if($edit){ echo $subject->edition;}?>" name="subject_edition">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="subject_author"><?php _e('Author Name','school-mgt');?></label>
			<div class="col-sm-8">
				<input id="subject_author" class="form-control" type="text" value="<?php if($edit){ echo $subject->author_name;}?>" name="subject_author">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="subject_syllabus"><?php _e('Syllabus','school-mgt');?></label>
			<div class="col-sm-8">
				 <input type="file" name="subject_syllabus"  id="subject_syllabus"/> 
				 
				 <input type="hidden" name="sylybushidden" value="<?php if($edit){ echo $subject->syllabus;} else echo "";?>">
                   <p class="help-block"><?php _e('Upload syllabus in PDF','school-mgt');?></p>     
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-8">
        	
        	<input type="submit" value="<?php if($edit){ _e('Save Subject','school-mgt'); }else{ _e('Add Subject','school-mgt');}?>" name="subject" class="btn btn-success"/>
        </div>
            	
        
        </form>
		</div>
<?php

?>