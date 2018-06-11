<?php 
	// This is Class at admin side!!!!!!!!! 
	if(isset($_POST['save_class']))
	{
		$created_date = date("Y-m-d H:i:s");
		$classdata=array('class_name'=>$_POST['class_name'],
						'class_num_name'=>$_POST['class_num_name'],
						'class_section'=>$_POST['class_section'],
						'class_capacity'=>$_POST['class_capacity'],	
						'creater_id'=>get_current_user_id(),
						'created_date'=>$created_date
						
		);
		//table name without prefix
		$tablename="smgt_class";
		
		if($_REQUEST['action']=='edit')
		{
			$classid=array('class_id'=>$_REQUEST['class_id']);
			$result=update_record($tablename,$classdata,$classid);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('record successfully Updated!','school-mgt');?></p>
					</div>
	  <?php }
		}
		else
		{
			$result=insert_record($tablename,$classdata);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('record successfully inserted!','school-mgt');?></p>
					</div>
	  <?php }
				
		}
		
	}
	$tablename="smgt_class";
	if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete')
	{
		$result=delete_class($tablename,$_REQUEST['class_id']);
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
$active_tab = isset($_GET['tab'])?$_GET['tab']:'classlist';
	?>

<div class="page-inner" style="min-height:1631px !important">
<div class="page-title">
		<h3><img src="<?php echo get_option( 'smgt_school_logo' ) ?>" class="img-circle head_logo" width="40" height="40" /><?php echo get_option( 'smgt_school_name' );?></h3>
	</div>
<div  id="main-wrapper" class="class_list">
	<div class="panel panel-white">
			<div class="panel-body">		
	<h2 class="nav-tab-wrapper">
    	<a href="?page=smgt_class&tab=classlist" class="nav-tab <?php echo $active_tab == 'classlist' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-menu"></span>'. __('Class List', 'school-mgt'); ?></a>
         <?php if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
		{?>
         <a href="?page=smgt_class&tab=addclass&&action=edit&class_id=<?php echo $_REQUEST['class_id'];?>" class="nav-tab <?php echo $active_tab == 'addclass' ? 'nav-tab-active' : ''; ?>">
		<?php _e('Edit Class', 'school-mgt'); ?></a>  
		<?php 
		}
		else
		{?>
    	<a href="?page=smgt_class&tab=addclass" class="nav-tab <?php echo $active_tab == 'addclass' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-plus-alt"></span>'.__('Add Class', 'school-mgt'); ?></a>  
        <?php } ?>
    </h2>
    
    <?php
	
	if($active_tab == 'classlist')
	{	
	?>	
   		 
    	
         <?php 
		 	$retrieve_class = get_all_data($tablename);
			
			
			
		?><div class="panel-body">
        <div class="table-responsive">
        <table id="example" class="display" cellspacing="0" width="100%">
        	 <thead>
            <tr>
                
                <th><?php _e('Class Name','school-mgt');?></th>
                <th><?php _e('Class Numeric Name','school-mgt');?></th>
                <th><?php _e('Section','school-mgt');?></th>
                <th><?php _e('Capacity','school-mgt');?></th>
                <td><?php _e('Action','school-mgt');?></td>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th><?php _e('Class Name','school-mgt');?></th>
                <th><?php _e('Class Numeric Name','school-mgt');?></th>
                <th><?php _e('Section','school-mgt');?></th>
                <th><?php _e('Capacity','school-mgt');?></th>
                <td><?php _e('Action','school-mgt');?></td>
            </tr>
        </tfoot>
 
        <tbody>
          <?php 
		 	foreach ($retrieve_class as $retrieved_data){ 
			
		 ?>
            <tr>
                <td><?php echo $retrieved_data->class_name;?></td>
                <td><?php echo $retrieved_data->class_num_name;?></td>
                <td><?php echo $retrieved_data->class_section;?></td>
                <td><?php echo $retrieved_data->class_capacity;?></td>
               <td><a href="?page=smgt_class&tab=addclass&action=edit&class_id=<?php echo $retrieved_data->class_id;?>" class="btn btn-info"> <?php _e('Edit','school-mgt');?></a>
               <a href="?page=smgt_class&tab=classlist&action=delete&class_id=<?php echo $retrieved_data->class_id;?>" class="btn btn-danger" onclick="return confirm('<?php _e('Are you sure you want to delete this record?','school-mgt');?>');"> <?php _e('Delete','school-mgt');?></a></td>
            </tr>
            <?php } ?>
     
        </tbody>
        
        </table>
        </div>
        </div>
       </div>
     <?php 
	 }
	if($active_tab == 'addclass')
	 {
		require_once SMS_PLUGIN_DIR. '/admin/includes/class/add-newclass.php';
		
	 }
	 ?>
	 
	 
	 </div>
</div>
</div>
<?php ?>