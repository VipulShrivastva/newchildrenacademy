<?php	
class School_Management
{
	public $student;
	public $teacher;
	public $exam;
	public $result;
	public $subject;
	public $schedule;
	public $transport;
	public $notice;
	public $message;
	public $role;
	public $class_info;
	public $parent_list;
	public $child_list;
	public $payment;
	public $feepayment;
	
	function __construct($user_id = NULL)
	{
		if($user_id)
		{
			if($this->get_current_user_role() == 'student')
			{
				$this->role= "student";
				$this->class_info = $this->get_user_class_id($user_id);
				$this->subject = $this->subject_list($this->class_info->class_id);
				$this->parent_list = $this->parants($user_id);
				$this->student = $this->get_student_list($this->class_info->class_id);
				$this->payment_list = $this->payment('student');
				
				
				//$this->notice = $this->notice_board_student($user_id,$this->get_current_user_role());
				$this->notice = $this->notice_board($this->get_current_user_role());
			}
			if($this->get_current_user_role() == 'teacher')
			{
				$this->role= "teacher";
				$this->student = get_usersdata('student');
				$this->notice = $this->notice_board($this->get_current_user_role());
			}
			if($this->get_current_user_role() == 'supportstaff')
			{
				$this->role= "supportstaff";
				$this->student = get_usersdata('student');
				$this->notice = $this->notice_board($this->get_current_user_role());
				$this->payment_list = $this->payment('supportstaff');
			}
			if($this->get_current_user_role() == 'parent')
			{
				$this->role="parent";
				$this->child_list = $this->child($user_id);
				$this->payment_list = $this->payment('parent');
				$this->notice = $this->notice_board($this->get_current_user_role());
			}
			if($this->get_current_user_role() == 'administrator')
			{
				$this->role= "admin";
			}
			//$this->notice = $this->notice_board($this->get_current_user_role());
			$this->payment = $this->payment($this->get_current_user_role());
			$this->feepayment = $this->feepayment($this->get_current_user_role());
		}
	}

	private function get_current_user_role () {
		global $current_user;
		$user_roles = $current_user->roles;
		$user_role = array_shift($user_roles);
		return $user_role;
	}
	
	public function get_user_class_id($user_id)
	{
		$user =get_userdata( $user_id );
		$user_meta =get_user_meta($user_id);
		$class_id = $user_meta['class_name'][0];
		global $wpdb;
		$table_name = $wpdb->prefix .'smgt_class';
		$class_info =$wpdb->get_row("SELECT * FROM $table_name WHERE class_id=".$class_id);
		return $class_info;
	}
	
	public function subject_list($class_id)
	{
		global $wpdb;
		$table_name = $wpdb->prefix .'subject';
		
		$result =$wpdb->get_results("SELECT * FROM $table_name WHERE class_id=".$class_id);
		return $result;
	}
	
	public function notice_board($role,$limit = -1)
	{
		$args['post_type'] = 'notice';
		$args['posts_per_page'] = $limit;
		$args['post_status'] = 'public';
		$args['orderby'] = 'date';
		$args['order'] = 'DESC';
		$args['meta_query'] = array(
									'relation' => 'OR',
							        array(
							            'key' => 'notice_for',
							            'value' =>"all",						           
							        ),
									array(
											'key' => 'notice_for',
											'value' =>"$role",
									)
							   );
		$q = new WP_Query();
		
		$retrieve_notice = $q->query( $args );
		return $retrieve_notice;
		
	}
	private function notice_board_student($user_id,$role)
	{
		/* $args['post_type'] = 'notice';
		$args['posts_per_page'] = -1;
		$args['post_status'] = 'public'; */
		$class_id=get_user_meta($user_id, 'class_name',true);
		global $wpdb;
		$table_post = $wpdb->prefix .'posts';
		$table_postmeta = $wpdb->prefix .'postmeta';
		/*
		 select * FROM wp_posts as post,wp_postmeta as post_meta where post.post_type='notice' AND 
		 (post.ID=post_meta.post_id AND (post_meta.meta_key = 'notice_for' AND 
		 (post_meta.meta_value = 'student' OR post_meta.meta_value = 'all')) OR 
		 (post_meta.meta_key = 'notice_for' AND post_meta.meta_key = 'smgt_class_id' AND
		  (post_meta.meta_value = 4 OR post_meta.meta_value = 'all'))) 
		 */
		/* echo $sql="select * FROM $table_post as post,$table_postmeta as post_meta where post.post_type='notice' AND post.ID=post_meta.post_id AND 
			(post_meta.meta_key = 'notice_for' AND (post_meta.meta_value = '$role' OR post_meta.meta_value = 'all')) 
		 OR (post_meta.meta_key = 'smgt_class_id' AND (post_meta.meta_value = $class_id OR post_meta.meta_value = 'all')) Limit 0,3"; */
		$notice_limit = "";
		if(!isset($_REQUEST['page']) )
			$notice_limit = "Limit 0,3";
		$sql=" select * FROM $table_post as post,$table_postmeta as post_meta where post.post_type='notice' AND 
		 (post.ID=post_meta.post_id AND (post_meta.meta_key = 'notice_for' AND 
		 (post_meta.meta_value = '$role' OR post_meta.meta_value = 'all')) OR 
		 (post_meta.meta_key = 'notice_for' AND post_meta.meta_key = 'smgt_class_id' AND
		  (post_meta.meta_value = '$class_id' OR post_meta.meta_value = 'all'))) $notice_limit";
		/* $args['meta_query'] = array(
				'relation' => 'OR',
				array(
						'key' => 'notice_for',
						'value' =>"all",
				),
				array(
						'key' => 'notice_for',
						'value' =>"$role",
				)
		);
		$q = new WP_Query(); */
	
		$retrieve_notice = $wpdb->get_results( $sql );
		return $retrieve_notice;
	
	}
	 function notice_board_parent($role)
	{
		$args['post_type'] = 'notice';
		$args['posts_per_page'] = -1;
		$args['post_status'] = 'public';
	
		$args['meta_query'] = array(
				'relation' => 'OR',
				array(
						'key' => 'notice_for',
						'value' =>"all",
				),
				array(
						'key' => 'notice_for',
						'value' =>"$role",
				)
		);
		$q = new WP_Query();
	
		$retrieve_notice = $q->query( $args );
		return $retrieve_notice;
	
	}
	private function notice_board_teacher($role)
	{
		$args['post_type'] = 'notice';
		$args['posts_per_page'] = -1;
		$args['post_status'] = 'public';
		$class_id = "";
		$args['meta_query'] = array(
				'relation' => 'OR',
				array(
						'key' => 'notice_for',
						'value' =>"all",
				),
				array(
						'key' => 'notice_for',
						'value' =>"$role",
				)
		);
		$q = new WP_Query();
	
		$retrieve_notice = $q->query( $args );
		return $retrieve_notice;
	
	}
	
	private function payment($user_role)
	{
		global $wpdb;
		$table_name = $wpdb->prefix .'smgt_payment as p';
		$table_users = $wpdb->prefix .'users as u';
		if($user_role == 'student')
		{
			$result =$wpdb->get_results("SELECT * FROM $table_name WHERE student_id=".get_current_user_id());
		}
		else if($user_role == 'parent')
		{
			$result =$wpdb->get_results("SELECT * FROM $table_name WHERE student_id in (".implode(',', $this->child_list).")");
			
		}
		else
			$result =$wpdb->get_results("SELECT * FROM $table_name,$table_users  where p.student_id = u.id ");
						
	 	return $result;
	}
	private function feepayment($user_role)
	{
		global $wpdb;
		$table_name = $wpdb->prefix .'smgt_fees_payment as p';
		$table_users = $wpdb->prefix .'users as u';
		if($user_role == 'student')
		{
			$result =$wpdb->get_results("SELECT * FROM $table_name WHERE student_id=".get_current_user_id());
		}
		else if($user_role == 'parent')
		{
			$result =$wpdb->get_results("SELECT * FROM $table_name WHERE student_id in (".implode(',', $this->child_list).")");
			
		}
		else
			$result =$wpdb->get_results("SELECT * FROM $table_name,$table_users  where p.student_id = u.id ");
						
	 	return $result;
	}
	
	public function get_student_list($class_id)
	{
		$students = get_users(array('meta_key' => 'class_name', 'meta_value' => $class_id,'role'=>'student'));
		return $students;
	}
	public function get_all_student_list()
	{
		$students = get_users(array('role'=>'student'));
		return $students;
	}
	private function parants($user_id)
	{
		$user_meta =get_user_meta($user_id, 'parent_id', true);
		return $user_meta;
	}
	private function child($user_id)
	{
		$user_meta =get_user_meta($user_id, 'child', true);
		return $user_meta;
	}
	
}



?>