<?php 
	// This is Class at admin side!!!!!!!!! 
	
	//----------------delete record-------------------
		$tablename="holiday";
	if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete')
	{
		$result=delete_holiday($tablename,$_REQUEST['holiday_id']);
		if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('Record successfully deleted!','school-mgt');?></p>
					</div>
	  <?php }
	}
	//----------------add and update code------------
			if(isset($_POST['save_holiday']))
	{
		$haliday_data=array('holiday_title'=>$_POST['holiday_title'],
						'description'=>$_POST['description'],
						'date'=>date('Y-m-d', strtotime(str_replace('-', '/',$_POST['date']))),
						'end_date'=>date('Y-m-d', strtotime(str_replace('-', '/',$_POST['end_date']))),
						'created_by'=>get_current_user_id()
						);
		//table name without prefix
		$tablename="holiday";
		
		if($_REQUEST['action']=='edit')
		{
			$holiday_id=array('holiday_id'=>$_REQUEST['holiday_id']);
			
			
			$result=update_record($tablename,$haliday_data,$holiday_id);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('Record successfully Updated!','school-mgt');?></p>
					</div>
	  <?php }
		}
		else
		{
			$result=insert_record($tablename,$haliday_data);
			
				if($result)
				{?>
					<div id="message" class="updated below-h2">
							<p><?php _e('Record successfully inserted!','school-mgt');?></p>
						</div>
		  <?php }
		}
		
		
	}

	//---------------------------
$active_tab = isset($_GET['tab'])?$_GET['tab']:'holidaylist';
	?>
<div class="page-inner" style="min-height:1631px !important">
<div class="page-title">
		<h3><img src="<?php echo get_option( 'smgt_school_logo' ) ?>" class="img-circle head_logo" width="40" height="40" /><?php echo get_option( 'smgt_school_name' );?></h3>
	</div>

<div  id="main-wrapper" class=" holidays_list">  
	<div class="panel panel-white">
					<div class="panel-body">    
	<h2 class="nav-tab-wrapper">
    	<a href="?page=smgt_holiday&tab=holidaylist" class="nav-tab <?php echo $active_tab == 'holidaylist' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-menu"></span>'.__('Holiday List', 'school-mgt'); ?></a>
         <?php if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
		{?>
       <a href="?page=smgt_holiday&tab=addholiday&action=edit&notice_id=<?php echo $_REQUEST['holiday_id'];?>" class="nav-tab <?php echo $active_tab == 'addholiday' ? 'nav-tab-active' : ''; ?>">
		<?php _e('Edit Holiday', 'school-mgt'); ?></a>  
		<?php 
		}
		else
		{?>
    	<a href="?page=smgt_holiday&tab=addholiday" class="nav-tab <?php echo $active_tab == 'addholiday' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-plus-alt"></span>'.__('Add Holiday', 'school-mgt'); ?></a>  
        <?php } ?>
    </h2>
    <?php
	
	if($active_tab == 'holidaylist')
	{	
	?>	
   		
    	
         <?php 
		 $retrieve_class = get_all_data($tablename);
		?>
        <div class="panel-body">
        <div class="table-responsive">
        <table id="example" class="display" cellspacing="0" width="100%">
        	 <thead>
            <tr>                
               <th><?php _e('Holiday Title','school-mgt');?></th>
                <th><?php _e('Description','school-mgt');?></th>
                <th><?php _e('Start Date','school-mgt');?></th>
                <th><?php _e('End Date','school-mgt');?></th>                 
                <th><?php _e('Action','school-mgt');?></th>             
            </tr>
        </thead>
 
        <tfoot>
            <tr>
             <th><?php _e('Holiday Title','school-mgt');?></th>
                <th><?php _e('Description','school-mgt');?></th>
                <th><?php _e('Start Date','school-mgt');?></th>
                <th><?php _e('End Date','school-mgt');?></th>               
                <th><?php _e('Action','school-mgt');?></th>            
            </tr>
        </tfoot>
 
        <tbody>
          <?php 	
		 	foreach ($retrieve_class as $retrieved_data){ 		
		 ?>
            <tr>
                <td><?php echo $retrieved_data->holiday_title;?></td>
                <td><?php echo $retrieved_data->description;?></td>
                <td><?php echo $retrieved_data->date;?></td>
                 <td><?php echo $retrieved_data->end_date;?></td>
                   
               <td><a href="?page=smgt_holiday&tab=addholiday&action=edit&holiday_id=<?php echo $retrieved_data->holiday_id;?>"class="btn btn-info"><?php _e('Edit','school-mgt');?></a>
               <a href="?page=smgt_holiday&tab=holidaylist&action=delete&holiday_id=<?php echo $retrieved_data->holiday_id;?>" class="btn btn-danger" 
               onclick="return confirm('<?php _e('Are you sure you want to delete this record?','school-mgt');?>');"> <?php _e('Delete','school-mgt');?></a></td>
            </tr>
            <?php } ?>
     
        </tbody>
        
        </table>
        </div>
        </div>
       
     <?php 
	 }
	if($active_tab == 'addholiday')
	 {
		require_once SMS_PLUGIN_DIR. '/admin/includes/holiday/add-holiday.php';
		
	 }
	 ?>
	 		</div>
	 	</div>
	 </div>
</div>
<?php ?>