<?php 
class Smgt_feespayment
{	
	
	
	public function delete_fee_type($cat_id)
	{
		$result=wp_delete_post($cat_id);
		
		return $result;
	}
	
	public function add_feespayment($data)
	{
		global $wpdb;
		$table_smgt_fees_payment = $wpdb->prefix. 'smgt_fees_payment';
		//-------usersmeta table data--------------
		$feedata['class_id']=$_POST['class_id'];
		//$feedata['student_id']=$data['student_id'];
		$feedata['fees_id']=$data['fees_id'];
		$feedata['total_amount']=$_POST['fees_amount'];
		//$feedata['fees_paid_amount']=$_POST['fees_paid_amount'];
		$feedata['description']=$_POST['description'];	
		$feedata['start_year']=$_POST['start_year'];	
		$feedata['end_year']=$_POST['end_year'];	
		$feedata['paid_by_date']=date("Y-m-d");		
		$feedata['created_date']=date("Y-m-d H:i:s");
		$feedata['created_by']=get_current_user_id();
	
	
		if($data['action']=='edit')
		{
			$feedata['student_id']=$data['student_id'];
			
			$fees_id['fees_pay_id']=$data['fees_pay_id'];
			$result=$wpdb->update( $table_smgt_fees_payment, $feedata ,$fees_id);
			
			return $result;
		}
		else
		{
			$student = get_users(array('meta_key' => 'class_name', 'meta_value' => $_POST['class_id'],'role'=>'student'));
			foreach($student as $user)
			{
				$feedata['student_id'] = $user->ID;
				$result=$wpdb->insert( $table_smgt_fees_payment, $feedata );
			}
			return $result;
		}
	}
	public function add_feespayment_history($data)
	{
		global $wpdb;
		$table_smgt_fee_payment_history = $wpdb->prefix. 'smgt_fee_payment_history';
		//-------usersmeta table data--------------
		$feedata['fees_pay_id']=$_POST['fees_pay_id'];
		$feedata['amount']=$data['amount'];
		$feedata['payment_method']=$data['payment_method'];	
		if(isset($data['trasaction_id']))
		{
			$feedata['trasaction_id']=$data['trasaction_id'] ;
		}
		$feedata['paid_by_date']=date("Y-m-d");
		
		$feedata['created_by']= get_current_user_id();
		
		$paid_amount = $this->get_paid_amount_by_feepayid($feedata['fees_pay_id']);
		
		$uddate_data['fees_paid_amount'] = $paid_amount + $feedata['amount'];
		$uddate_data['payment_status'] = $this->get_payment_status_name($data['fees_pay_id']);
		$uddate_data['fees_pay_id'] = $_POST['fees_pay_id'];
		$this->update_paid_fees_amount($uddate_data);
		$uddate_data1['payment_status'] = $this->get_payment_status_name($data['fees_pay_id']);
		$uddate_data1['fees_pay_id'] = $_POST['fees_pay_id'];
		$this->update_payment_status_fees_amount($uddate_data1);
		$result=$wpdb->insert( $table_smgt_fee_payment_history, $feedata );
		
		return $result;
		
	}
	public function get_payment_status_name($fees_pay_id)
{
	//1 Not paid
	//2 Partial paid
	//3 Fully paid
	global $wpdb;
	$table_smgt_fees_payment = $wpdb->prefix .'smgt_fees_payment';
	
	$result =$wpdb->get_row("SELECT * FROM $table_smgt_fees_payment WHERE fees_pay_id=".$fees_pay_id);
	if(!empty($result))
	{	
		if($result->fees_paid_amount == 0)
		{
			return 1;
		}
		elseif($result->fees_paid_amount < $result->total_amount)
		{
			return 1;
		}
		else
			return 2;
	}
	else
		return 0;
}
	public function get_paid_amount_by_feepayid($fees_pay_id)
	{
		global $wpdb;
		$table_smgt_fees_payment = $wpdb->prefix. 'smgt_fees_payment';
		//echo "SELECT fees_paid_amount FROM $table_smgt_fees_payment where fees_pay_id = $fees_pay_id";
		$result = $wpdb->get_row("SELECT fees_paid_amount FROM $table_smgt_fees_payment where fees_pay_id = $fees_pay_id");
		return $result->fees_paid_amount;
	}
	public function update_paid_fees_amount($data)
	{
		global $wpdb;
		$table_smgt_fees_payment = $wpdb->prefix. 'smgt_fees_payment';
		$feedata['fees_paid_amount'] = $data['fees_paid_amount'];
		$feedata['payment_status'] = $data['payment_status'];
		$fees_id['fees_pay_id']=$data['fees_pay_id'];
			$result=$wpdb->update( $table_smgt_fees_payment, $feedata ,$fees_id);
	}
	public function update_payment_status_fees_amount($data)
	{
		global $wpdb;
		$table_smgt_fees_payment = $wpdb->prefix. 'smgt_fees_payment';
		
		$feedata['payment_status'] = $data['payment_status'];
		$fees_id['fees_pay_id']=$data['fees_pay_id'];
			$result=$wpdb->update( $table_smgt_fees_payment, $feedata ,$fees_id);
	}
	public function get_all_fees()
	{
		global $wpdb;
		$table_smgt_fees_payment = $wpdb->prefix. 'smgt_fees_payment';
	
		$result = $wpdb->get_results("SELECT * FROM $table_smgt_fees_payment");
		return $result;
	}
	public function smgt_get_single_fee_payment($fees_pay_id)
	{
		global $wpdb;
		$table_smgt_fees_payment = $wpdb->prefix. 'smgt_fees_payment';
	
		$result = $wpdb->get_row("SELECT * FROM $table_smgt_fees_payment where fees_pay_id = $fees_pay_id");
		return $result;
	}
	public function smgt_get_single_feetype_data($fees_id)
	{
		global $wpdb;
		$table_smgt_fees = $wpdb->prefix. 'smgt_fees';
	
		$result = $wpdb->get_row("SELECT * FROM $table_smgt_fees where fees_id = $fees_id ");
		return $result;
	}
	public function smgt_delete_feetype_data($fees_id)
	{
		global $wpdb;
		$table_smgt_fees = $wpdb->prefix. 'smgt_fees';
		$result = $wpdb->query("DELETE FROM $table_smgt_fees where fees_id= ".$fees_id);
		return $result;
	}
	public function smgt_delete_feetpayment_data($fees_pay_id)
	{
		global $wpdb;
		$table_smgt_fees_payment = $wpdb->prefix. 'smgt_fees_payment';
		$result = $wpdb->query("DELETE FROM $table_smgt_fees_payment where fees_pay_id= ".$fees_pay_id);
		return $result;
	}
	
}
?>