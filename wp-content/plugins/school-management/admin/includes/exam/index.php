<?php 
	// This is Class at admin side!!!!!!!!! 
	
	//------------Delete record--------------------------
	$tablename="exam";
	if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete')
	{
		$result=delete_exam($tablename,$_REQUEST['exam_id']);
		if($result)
			{?>
				<div id="message" class="updated below-h2">
					<p><?php _e('record successfully delete!','school-mgt');?></p>
				</div>
		<?php 
			}
	}
	//-----------update record-------------------------
	if(isset($_POST['save_exam']))
	{
		
		$created_date = date("Y-m-d H:i:s");
		$examdata=array('exam_name'=>$_POST['exam_name'],
						'exam_date'=>date('Y-m-d', strtotime(str_replace('-', '/', $_POST['exam_date']))),
						'exam_comment'=>$_POST['exam_comment'],					
						'exam_creater_id'=>get_current_user_id(),
						'created_date'=>$created_date
						
		);
		
		
		//table name without prefix
		$tablename="exam";
		
		if($_REQUEST['action']=='edit')
		{
			$grade_id=array('exam_id'=>$_REQUEST['exam_id']);
			$modified_date_date = date("Y-m-d H:i:s");
			$examdata['modified_date']=$modified_date_date;
			$result=update_record($tablename,$examdata,$grade_id);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('record successfully Updated!','school-mgt');?></p>
					</div>
	  <?php }
		}
		else
		{
			$result=insert_record($tablename,$examdata);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
				
						<p><?php _e('record successfully inserted!','school-mgt');?></p>
					</div>
	  <?php }
				
		}
		
	}

	?>
	<?php
$active_tab = isset($_GET['tab'])?$_GET['tab']:'examlist';
	?>

<div class="page-inner" style="min-height:1631px !important">
<div class="page-title">
		<h3><img src="<?php echo get_option( 'smgt_school_logo' ) ?>" class="img-circle head_logo" width="40" height="40" /><?php echo get_option( 'smgt_school_name' );?></h3>
	</div>
	<div  id="main-wrapper" class="grade_page">
	<div class="panel panel-white">
	<div class="panel-body">     
	<h2 class="nav-tab-wrapper">
    	<a href="?page=smgt_exam&tab=examlist" class="nav-tab <?php echo $active_tab == 'examlist' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-menu"></span>'.__('Exam List', 'school-mgt'); ?></a>
         <?php if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
		{?>
       <a href="?page=smgt_exam&tab=addexam&action=edit&exam_id=<?php echo $_REQUEST['exam_id'];?>" class="nav-tab <?php echo $active_tab == 'addexam' ? 'nav-tab-active' : ''; ?>">
		<?php _e('Edit Exam', 'school-mgt'); ?></a>  
		<?php 
		}
		else
		{?>
    	<a href="?page=smgt_exam&tab=addexam" class="nav-tab <?php echo $active_tab == 'addexam' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-plus-alt"></span>'.__('Add Exam', 'school-mgt'); ?></a>  
        <?php } ?>
    </h2>
    <?php
	
	if($active_tab == 'examlist')
	{	
	?>	
   <?php 
		 	$retrieve_class = get_all_data($tablename);
		?>
        <div class="panel-body">	
        <table id="example" class="display" cellspacing="0" width="100%">
        	 <thead>
            <tr>                
                <th><?php _e('Exam Title','school-mgt');?></th>
                <th><?php _e('Exam Date','school-mgt');?></th>
                <th><?php _e('Exam Comment','school-mgt');?></th>
                <th><?php _e('Action','school-mgt');?></th>               
            </tr>
        </thead>
 
        <tfoot>
            <tr>
              <th><?php _e('Exam Title','school-mgt');?></th>
                <th><?php _e('Exam Date','school-mgt');?></th>
                <th><?php _e('Exam Comment','school-mgt');?></th>
                <th><?php _e('Action','school-mgt');?></th>     
            </tr>
        </tfoot>
 
        <tbody>
          <?php 
		 	foreach ($retrieve_class as $retrieved_data){ 
			
		 ?>
            <tr>
                <td><?php echo $retrieved_data->exam_name;?></td>
                <td><?php echo $retrieved_data->exam_date;?></td>
                <td><?php echo $retrieved_data->exam_comment;?></td>              
               <td><a href="?page=smgt_exam&tab=addexam&action=edit&exam_id=<?php echo $retrieved_data->exam_id;?>" class="btn btn-info"><?php _e('Edit','school-mgt');?></a>
               <a href="?page=smgt_exam&tab=examlist&action=delete&exam_id=<?php echo $retrieved_data->exam_id;?>" class="btn btn-danger" 
               onclick="return confirm('<?php _e('Are you sure you want to delete this record?','school-mgt');?>');"><?php _e('Delete','school-mgt');?></a></td>
            </tr>
            <?php } ?>
     
        </tbody>
        
        </table>
       </div>
     <?php 
	 }
	if($active_tab == 'addexam')
	 {
		require_once SMS_PLUGIN_DIR. '/admin/includes/exam/add-exam.php';
		
	 }
	 ?>
	 		</div>
	 	</div>
	 </div>
</div>
<?php ?>