<?php 
	//This is Dashboard at admin side
	$obj_invoice= new Smgtinvoice();
	
	if($active_tab == 'incomelist')
	 {
        	
				?>
		     <script type="text/javascript">
$(document).ready(function() {
	jQuery('#tblincome').DataTable({
		responsive: true,
		 "order": [[ 3, "Desc" ]],
		 "aoColumns":[
	                  {"bSortable": true},
	                  {"bSortable": true},
	                  {"bSortable": true},
	                  {"bSortable": true}, 
	                                   
	                  {"bSortable": false}
	               ]
		});
		
	
} );
</script>
     <div class="panel-body">
        	<div class="table-responsive">
        <table id="tblincome" class="display" cellspacing="0" width="100%">
        	 <thead>
            <tr>
				<th> <?php _e( 'Roll No.', 'school-mgt' ) ;?></th>
				<th> <?php _e( 'Studnet Name', 'school-mgt' ) ;?></th>
				<th> <?php _e( 'Amount', 'school-mgt' ) ;?></th>
				<th> <?php _e( 'Date', 'school-mgt' ) ;?></th>
                <th><?php  _e( 'Action', 'school-mgt' ) ;?></th>
            </tr>
        </thead>
		<tfoot>
            <tr>
				<th> <?php _e( 'Roll No.', 'school-mgt' ) ;?></th>
				<th> <?php _e( 'Studnet Name', 'school-mgt' ) ;?></th>
				<th> <?php _e( 'Amount', 'school-mgt' ) ;?></th>
				<th> <?php _e( 'Date', 'school-mgt' ) ;?></th>
                <th><?php  _e( 'Action', 'school-mgt' ) ;?></th>
            </tr>
        </tfoot>
 
        <tbody>
         <?php 
		
		 	foreach ($obj_invoice->get_all_income_data() as $retrieved_data){ 
				$all_entry=json_decode($retrieved_data->entry);
				$total_amount=0;
				foreach($all_entry as $entry){
					$total_amount+=$entry->amount;
				}
		 ?>
            <tr>
				<td class="patient"><?php echo get_user_meta($retrieved_data->supplier_name, 'roll_id',true);?></td>
				<td class="patient_name"><?php echo get_user_name_byid($retrieved_data->supplier_name);?></td>
				<td class="income_amount"><?php echo $total_amount;?></td>
                <td class="status"><?php echo $retrieved_data->income_create_date;?></td>
                
               	<td class="action">
				<a  href="#" class="show-invoice-popup btn btn-default" idtest="<?php echo $retrieved_data->income_id; ?>" invoice_type="income">
				<i class="fa fa-eye"></i> <?php _e('View Income', 'school-mgt');?></a>
				<a href="?page=smgt_payment&tab=addincome&action=edit&income_id=<?php echo $retrieved_data->income_id;?>" class="btn btn-info"> <?php _e('Edit', 'school-mgt' ) ;?></a>
                <a href="?page=smgt_payment&tab=incomelist&action=delete&income_id=<?php echo $retrieved_data->income_id;?>" class="btn btn-danger" 
                onclick="return confirm('<?php _e('Are you sure you want to delete this record?','school-mgt');?>');">
                <?php _e( 'Delete', 'school-mgt' ) ;?> </a>
                </td>
            </tr>
            <?php } 
			
		?>
     
        </tbody>
        
        </table>
        </div>
        </div>
	 <?php  }?>