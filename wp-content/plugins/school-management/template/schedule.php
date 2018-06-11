<?php
// Schedule
$obj_route = new Class_routine ();

?>
<div class="panel-body panel-white">
 <ul class="nav nav-tabs panel_tabs" role="tablist">
      <li class="active">
          <a href="#schedule" role="tab" data-toggle="tab">
             <i class="fa fa-align-justify"></i>  <?php _e('Class Timetable', 'school-mgt'); ?></a>
          </a>
      </li>
</ul>
<div class="tab-content">

	<div class="panel-body">
	<div class="panel-group" id="accordion">
       
         <?php
         $i = 0;
       
        
         if($school_obj->role == 'teacher')
         {
									$retrieve_class = get_all_data ( 'smgt_class' );
									
									foreach ( $retrieve_class as $class ) {
										$i ++;
										?>
        <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion"
					href="#collapse<?php echo $i;?>">
		       			<?php echo _e( 'Class', 'school-mgt' ) ;?> <?php echo $class->class_name; ?></a>
			</h4>
		</div>
		<div id="collapse<?php echo $i;?>" class="panel-collapse collapse">
			<div class="panel-body">

				<table class="table table-bordered" cellspacing="0" cellpadding="0"
					border="0">
	        <?php
										foreach ( sgmt_day_list() as $daykey => $dayname ) {
											?>
					<tr>
						<th width="100"><?php echo $dayname;?></th>
						<td>
	        	 <?php
											$period = $obj_route->get_periad ( $class->class_id, $daykey );
											if (! empty ( $period ))
												foreach ( $period as $period_data ) {?>
													
											<?php 
													
													echo '<button class="btn btn-primary"><span class="period_box" id=' . $period_data->route_id . '>' . get_single_subject_name ( $period_data->subject_id );
													echo '<span class="time"> (' . $period_data->start_time . ' - ' . $period_data->end_time . ') </span>';
													echo "</span></button>";
												}
											?>
											
	        				</td>
					</tr>
			<?php
										}
										?>
	        	</table>
			</div>
		</div>

	</div>
		<?php
									}
         }
         else if($school_obj->role == 'student')
         {
         	
       $class = $school_obj->class_info;
       
         ?>
           <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion"
					href="#collapse<?php echo $i;?>">
		       			<?php echo _e( 'Class', 'school-mgt' ) ;?> <?php echo $class->class_name; ?></a>
			</h4>
		</div>
		<div id="collapse<?php echo $i;?>" class="panel-collapse collapse in">
			<div class="panel-body">

				<table class="table table-bordered" cellspacing="0" cellpadding="0"
					border="0">
	        <?php
										foreach ( sgmt_day_list() as $daykey => $dayname ) {
											
											?>
					<tr>
						<th width="100"><?php echo $dayname;?></th>
						<td>
	        	 <?php
											$period = $obj_route->get_periad ( $class->class_id, $daykey );
											if (! empty ( $period ))
												foreach ( $period as $period_data ) {
													echo '<button class="btn btn-primary"><span class="period_box" id=' . $period_data->route_id . '>' . get_single_subject_name ( $period_data->subject_id );
													echo '<span class="time"> (' . $period_data->start_time . ' - ' . $period_data->end_time . ') </span>';
													echo "</span></button>";
												}
											?>
	        				</td>
					</tr>
			<?php
										}
										?>
	        	</table>
			</div>
		</div>


	</div>
         <?php
         	
         }
         else if($school_obj->role == 'parent'){
         	$chil_array =$school_obj->child_list;
         	$i = 0;
         foreach($chil_array as $child_id)
         {
         	$i++;
         	$class = $school_obj->get_user_class_id($child_id);
         	   ?>
         	  <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion"
					href="#collapse<?php echo $i;?>">
		       			<?php echo _e( 'Class', 'school-mgt' ) ;?> <?php echo $class->class_name; ?></a>
			</h4>
		</div>
		<div id="collapse<?php echo $i;?>" class="panel-collapse collapse <?php if($i== 1) echo 'in';?>">
			<div class="panel-body">

				<table class="table table-bordered" cellspacing="0" cellpadding="0"
					border="0">
	        <?php
										foreach ( sgmt_day_list() as $daykey => $dayname ) {
											?>
					<tr>
						<th width="100"><?php echo $dayname;?></th>
						<td>
	        	 <?php
											$period = $obj_route->get_periad ( $class->class_id, $daykey );
											if (! empty ( $period ))
												foreach ( $period as $period_data ) {
													echo '<button class="btn btn-primary"><span class="period_box" id=' . $period_data->route_id . '>' . get_single_subject_name ( $period_data->subject_id );
													echo '<span class="time"> (' . $period_data->start_time . ' - ' . $period_data->end_time . ') </span>';
													echo "</span></button>";
												}
											?>
	        				</td>
					</tr>
			<?php
										}
										?>
	        	</table>
			</div>
		</div>

	</div>
         	<?php 
         }
         }
									?>
		
</div>
</div>
</div>	
<?php ?>