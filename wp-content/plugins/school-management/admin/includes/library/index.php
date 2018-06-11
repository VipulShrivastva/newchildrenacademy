<?php 
	$obj_lib= new Smgtlibrary();
	//--------------Delete code-------------------------------
	
		if(isset($_REQUEST['action'])&& $_REQUEST['action']=='delete')
		{
			
			$result=$obj_lib->delete_book($_REQUEST['book_id']);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
					<p><?php _e('record successfully Delete!','school-mgt');?></p>
				</div>
		<?php 
			}
		}
		if(isset($_REQUEST['action'])&& $_REQUEST['action']=='delete' && $_REQUEST['tab']=='issuelist' && isset($_REQUEST['issuebook_id']))
		{
			
			$result=$obj_lib->delete_issuebook($_REQUEST['issuebook_id']);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
					<p><?php _e('record successfully Delete!','school-mgt');?></p>
				</div>
		<?php 
			}
		}
	//------------------Edit-Add code ------------------------------
if(isset($_POST['save_book']))
{
	
	
	if($_REQUEST['action']=='edit')
	{
			
			$result=$obj_lib->add_book($_POST);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('Record Successfully Updated!','school-mgt');?></p>
					</div>
	  <?php }
			
	}
	else
	{
			$result=$obj_lib->add_book($_POST);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('Record Successfully Inserted!','school-mgt');?></p>
					</div>
	  <?php }
				
	}
	
	
	
}
if(isset($_POST['save_issue_book']))
{
	
	if($_REQUEST['action']=='edit')
	{
			
			$result=$obj_lib->add_issue_book($_POST);
			
			if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('Record Successfully Updated!','school-mgt');?></p>
					</div>
	  <?php }
			
	}
	else
	{
			
			$result=$obj_lib->add_issue_book($_POST);
			if($result)
			{?>
				<div id="message" class="updated below-h2">
						<p><?php _e('Record Successfully Inserted!','school-mgt');?></p>
					</div>
	  <?php }
				
	}
	
	
	
}
if(isset($_POST['submit_book']))
{
	//var_dump($_POST);
	
	$result=$obj_lib->submit_return_book($_POST);
	if($result)
	{?>
		<div id="message" class="updated below-h2">
			<p><?php _e('Book Submitted Successfully','school-mgt');?></p>
		</div>
	<?php }
			
}
	
	?>
	<?php
$active_tab = isset($_GET['tab'])?$_GET['tab']:'memberlist';
	?>
	<!-- POP up code -->
<div class="popup-bg">
    <div class="overlay-content">
    <div class="modal-content">
    <div class="invoice_data">
     </div>
     
    </div>
    </div> 
    
</div>
<!-- End POP-UP Code -->
<div class="page-inner" style="min-height:1631px !important">
<div class="page-title">
		<h3><img src="<?php echo get_option( 'smgt_school_logo' ) ?>" class="img-circle head_logo" width="40" height="40" /><?php echo get_option( 'smgt_school_name' );?></h3>
	</div>
	<div id="main-wrapper">
		<div class="panel panel-white">
	<div class="panel-body"> 
	<h2 class="nav-tab-wrapper">
		<a href="?page=smgt_library&tab=memberlist" class="nav-tab <?php echo $active_tab =='memberlist' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-menu"></span>',__('Member List', 'school-mgt'); ?></a>
    	<a href="?page=smgt_library&tab=booklist" class="nav-tab <?php echo $active_tab == 'booklist' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-menu"></span>',__('Book List', 'school-mgt'); ?></a>
        
		
		<?php if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
		{?>
         <a href="?page=smgt_library&tab=addbook&action=edit&book_id=<?php echo $_REQUEST['book_id'];?>" class="nav-tab <?php echo $active_tab == 'addbook' ? 'nav-tab-active' : ''; ?>">
		<?php _e('Edit Book', 'school-mgt'); ?></a>  
		<?php 
		}
		else
		{?>
    	<a href="?page=smgt_library&tab=addbook" class="nav-tab <?php echo $active_tab == 'addbook' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-plus-alt"></span>'.__('Add Book', 'school-mgt'); ?></a> 
        <?php }
		?> 
        <a href="?page=smgt_library&tab=issuelist" class="nav-tab <?php echo $active_tab == 'issuelist' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-menu"></span>',__('Issue List', 'school-mgt'); ?></a>
         <?php if($_REQUEST['tab'] == 'issuebook' &&  isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
		{?>
         <a href="?page=smgt_library&tab=issuebook&action=edit&issuebook_id=<?php echo $_REQUEST['issuebook_id'];?>" class="nav-tab <?php echo $active_tab == 'issuebook' ? 'nav-tab-active' : ''; ?>">
		<?php _e('Edit Issue Book', 'school-mgt'); ?></a>  
		<?php 
		}
		else
		{?>
    	<a href="?page=smgt_library&tab=issuebook" class="nav-tab <?php echo $active_tab == 'issuebook' ? 'nav-tab-active' : ''; ?>">
		<?php echo '<span class="dashicons dashicons-plus-alt"></span>'.__('Issue Book', 'school-mgt'); ?></a> 
        <?php } ?> 
    </h2>
    
    <?php
	if($active_tab == 'booklist')
	{?>
		<div class="panel-body">
        <table id="example" class="display" cellspacing="0" width="100%">
        	 <thead>
            <tr>
				<th><?php _e('ISBN','school-mgt');?></th>
                <th><?php _e('Book Name','school-mgt');?></th>
                <th><?php _e('Author Name','school-mgt');?></th>
                <th><?php _e('Rack Location','school-mgt');?></th>
				<th><?php _e('Quantity','school-mgt');?></th>
                <th><?php _e('Action','school-mgt');?></th>
            </tr>
        </thead>
		<tfoot>
            <tr>
              	<th><?php _e('ISBN','school-mgt');?></th>
                <th><?php _e('Book Name','school-mgt');?></th>
                <th><?php _e('Author Name','school-mgt');?></th>
                <th><?php _e('Rack Location','school-mgt');?></th>
				<th><?php _e('Quantity','school-mgt');?></th>
                <th><?php _e('Action','school-mgt');?></th>
            </tr>
        </tfoot>
		<tbody>
         <?php $retrieve_books=$obj_lib->get_all_books(); 
			if(!empty($retrieve_books))
			{
				foreach ($retrieve_books as $retrieved_data){ ?>
				<tr>
					<td><?php echo $retrieved_data->ISBN;?></td>
					<td><?php echo stripslashes($retrieved_data->book_name);?></td>
					<td><?php echo stripslashes($retrieved_data->author_name);?></td>
					<td><?php echo $retrieved_data->rack_location;?></td>
					<td><?php echo $retrieved_data->quentity;?></td>
					<td> <a href="?page=smgt_library&tab=addbook&action=edit&book_id=<?php echo $retrieved_data->id;?>" class="btn btn-info"><?php _e('Edit','school-mgt');?> </a>
					<a href="?page=smgt_library&tab=booklist&action=delete&book_id=<?php echo $retrieved_data->id;?>" class="btn btn-danger" onclick="return confirm('<?php _e('Are you sure you want to delete this record?','school-mgt');?>');"> <?php _e('Delete','school-mgt');?></a> 
					</td>
				   
				</tr>
				<?php } 
			}?>	
     
        </tbody>
        
        </table>
        
        </div>
  
     <?php 
	 }
	if($active_tab == 'addbook')
	 {
		require_once SMS_PLUGIN_DIR. '/admin/includes/library/add-newbook.php';
	 }
	 if($active_tab == 'issuelist')
	 {
		require_once SMS_PLUGIN_DIR. '/admin/includes/library/issuelist.php';
	 }
	  if($active_tab == 'issuebook')
	 {
		require_once SMS_PLUGIN_DIR. '/admin/includes/library/issue-book.php';
	 }
	  if($active_tab == 'memberlist')
	 {
		require_once SMS_PLUGIN_DIR. '/admin/includes/library/memberlist.php';
	 }
	 ?>
	 
	 </div>
	 </div>
	 </div>
</div>
<?php ?>