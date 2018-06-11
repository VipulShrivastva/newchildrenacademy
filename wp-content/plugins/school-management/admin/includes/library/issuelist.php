<?php 
	$obj_lib= new Smgtlibrary();
	//--------------Delete code-------------------------------
	
		
	//------------------Edit-Add code ------------------------------


if($active_tab == 'issuelist')
{?>
		<div class="panel-body">
        <table id="example" class="display" cellspacing="0" width="100%">
        	 <thead>
            <tr>
				<th><?php _e('Student Name','school-mgt');?></th>
                <th><?php _e('Book Name','school-mgt');?></th>
                <th><?php _e('Issue Date','school-mgt');?></th>
                <th><?php _e('Return Date ','school-mgt');?></th>
				<th><?php _e('Period','school-mgt');?></th>
                <th><?php _e('Action','school-mgt');?></th>
            </tr>
        </thead>
		<tfoot>
            <tr>
              <th><?php _e('Student Name','school-mgt');?></th>
                <th><?php _e('Book Name','school-mgt');?></th>
                <th><?php _e('Issue Date','school-mgt');?></th>
                <th><?php _e('Return Date ','school-mgt');?></th>
				<th><?php _e('Period','school-mgt');?></th>
                <th><?php _e('Action','school-mgt');?></th>
            </tr>
        </tfoot>
		<tbody>
         <?php $retrieve_issuebooks=$obj_lib->get_all_issuebooks(); 
			if(!empty($retrieve_issuebooks))
			{
				foreach ($retrieve_issuebooks as $retrieved_data){ ?>
				<tr>
					<td><?php  $student=get_userdata($retrieved_data->student_id);
							echo $student->display_name;?></td>
					<td><?php echo stripslashes(get_bookname($retrieved_data->book_id));?></td>
					<td><?php echo $retrieved_data->issue_date;?></td>
					<td><?php echo $retrieved_data->end_date;?></td>
					<td><?php echo get_the_title($retrieved_data->period);?></td>
					<td> <a href="?page=smgt_library&tab=issuebook&action=edit&issuebook_id=<?php echo $retrieved_data->id;?>" class="btn btn-info"><?php _e('Edit','school-mgt');?> </a>
					<a href="?page=smgt_library&tab=issuelist&action=delete&issuebook_id=<?php echo $retrieved_data->id;?>" class="btn btn-danger" onclick="return confirm('<?php _e('Are you sure you want to delete this record?','school-mgt');?>');"> <?php _e('Delete','school-mgt');?></a> 
					</td>
				   
				</tr>
				<?php } 
			}?>	
     
        </tbody>
        
        </table>
        
        </div>
  
    
<?php } ?>