<?php 
	// This is Dashboard at admin side!!!!!!!!! 
	//--------------Delete code-------------------------------
	$tablename="subject";
		if(isset($_REQUEST['action'])&& $_REQUEST['action']=='delete')
		{
			
			$result=delete_subject($tablename,$_REQUEST['subject_id']);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
					<p><?php _e('record successfully Delete!','school-mgt');?></p>
				</div>
		<?php 
			}
		}
	//------------------Edit-Add code ------------------------------
if(isset($_POST['subject']))
{
	$syllabus='';
	if(isset($_FILES['subject_syllabus']) && !empty($_FILES['subject_syllabus']))
	{
		
		if($_FILES['subject_syllabus']['size'] > 0)
		{
		 $syllabus=inventory_image_upload($_FILES['subject_syllabus']);
		}
		else {
			$syllabus=$_POST['sylybushidden'];
		}
		
		
		//------TEMPRORY ADD RECORD FOR SET SYLLABUS----------
		
	}
	
	$subjects=array('sub_name'=>$_POST['subject_name'],
					'class_id'=>$_POST['subject_class'],
					'teacher_id'=>$_POST['subject_teacher'],
					'edition'=>$_POST['subject_edition'],
					'author_name'=>$_POST['subject_author'],	

			'syllabus'=>$syllabus
	);
	$tablename="subject";
	if($_REQUEST['action']=='edit')
	{
			$subid=array('subid'=>$_REQUEST['subject_id']);
			$result=update_record($tablename,$subjects,$subid);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('Record Successfully Updated!','school-mgt');?></p>
					</div>
	  <?php }
			
	}
	else
	{
		$result=insert_record($tablename,$subjects);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('Record Successfully Inserted!','school-mgt');?></p>
					</div>
	  <?php }
				
	}
	
	
	
}
	
	?>
	<?php
$active_tab = isset($_GET['tab'])?$_GET['tab']:'Subject';
	?>

<div class="page-inner" style="min-height:1631px !important">
<div class="page-title">
		<h3><img src="<?php echo get_option( 'smgt_school_logo' ) ?>" class="img-circle head_logo" width="40" height="40" /><?php echo get_option( 'smgt_school_name' );?></h3>
	</div>
	<div id="main-wrapper">
		<div class="panel panel-white">
					<div class="panel-body"> 
	<h2 class="nav-tab-wrapper">
    	<a href="?page=smgt_Subject&tab=Subject" class="nav-tab <?php echo $active_tab == 'Subject' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-menu"></span>',__('Subject List', 'school-mgt'); ?></a>
         <?php if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
		{?>
         <a href="?page=smgt_Subject&tab=addsubject&&action=edit&subject_id=<?php echo $_REQUEST['subject_id'];?>" class="nav-tab <?php echo $active_tab == 'addsubject' ? 'nav-tab-active' : ''; ?>">
		<?php _e('Edit Subject', 'school-mgt'); ?></a>  
		<?php 
		}
		else
		{?>
    	<a href="?page=smgt_Subject&tab=addsubject" class="nav-tab <?php echo $active_tab == 'addsubject' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-plus-alt"></span>'.__('Add Subject', 'school-mgt'); ?></a> 
        <?php }?> 
        
    </h2>
    
    <?php
	
	if($active_tab == 'Subject')
	{
		
		?>	
    
    	
        <?php 
			
			$retrieve_subjects=get_all_data($tablename);?>
			 <div class="panel-body">
        	
        <table id="example" class="display" cellspacing="0" width="100%">
        	 <thead>
            <tr>
                <th><?php _e('Subject Name','school-mgt');?></th>
                <th><?php _e('Teacher Name','school-mgt');?></th>
                <th><?php _e('Class Name','school-mgt');?></th>
                <th><?php _e('Author Name','school-mgt');?></th>
                <th><?php _e('Edition','school-mgt');?></th>
                <th><?php _e('Action','school-mgt');?></th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
              	<th><?php _e('Subject Name','school-mgt');?></th>
                <th><?php _e('Teacher Name','school-mgt');?></th>
                <th><?php _e('Class Name','school-mgt');?></th>
                <th><?php _e('Author Name','school-mgt');?></th>
                <th><?php _e('Edition','school-mgt');?></th>
                <th><?php _e('Action','school-mgt');?></th>
            </tr>
        </tfoot>
 
        <tbody>
         <?php 
		 	foreach ($retrieve_subjects as $retrieved_data){ 
			
		 ?>
            <tr>
                <td><?php echo $retrieved_data->sub_name;?></td>
                <td><?php $uid=$retrieved_data->teacher_id;
							echo get_teacher($uid);
				?></td>
                <td><?php $cid=$retrieved_data->class_id;
							echo  $clasname=get_class_name($cid);
							
				?></td>
                <td><?php echo $retrieved_data->author_name;?></td>
                <td><?php echo $retrieved_data->edition;?></td>
                <td> <a href="?page=smgt_Subject&tab=addsubject&action=edit&subject_id=<?php echo $retrieved_data->subid;?>" class="btn btn-info"><?php _e('Edit','school-mgt');?> </a>
                <a href="?page=smgt_Subject&tab=Subject&action=delete&subject_id=<?php echo $retrieved_data->subid;?>" class="btn btn-danger" onclick="return confirm('<?php _e('Are you sure you want to delete this record?','school-mgt');?>');"> <?php _e('Delete','school-mgt');?></a> 
				 <a href="<?php echo content_url().'/uploads/school_assets/'.$retrieved_data->syllabus;?>" class="btn btn-default"><i class="fa fa-download"></i><?php _e('Syllabus','school-mgt');?></a>
				</td>
               
            </tr>
            <?php } ?>	
     
        </tbody>
        
        </table>
        
        </div>
  
     <?php 
	 }
	if($active_tab == 'addsubject')
	 {
		require_once SMS_PLUGIN_DIR. '/admin/includes/subject/add-newsubject.php';
	 }
	 ?>
	 
	 </div>
	 </div>
	 </div>
</div>
<?php ?>