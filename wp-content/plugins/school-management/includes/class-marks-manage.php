<?php
class Marks_Manage
{
	public $mark_id;
	public $exam_id;
	public $class_id;
	public $subject_id;
	public $marks;
	public $attendance;
	public $student_id;
	public $marks_comment;
	public $created_date;
	//current_time( 'mysql' );
	
	public function __construct( $marks = null ) 
	{
		if($marks)
		{
			global $wpdb;
			$table_name = $wpdb->prefix . "marks";
			$mark_data = $wpdb->get_row( "SELECT * FROM $table_name WHERE mark_id=".$marks);
			$this->mark_id = $mark_data->mark_id;
			$this->exam_id = $mark_data->exam_id;
			$this->class_id = $mark_data->class_id;
			$this->subject_id = $mark_data->subject_id;
			$this->marks = $mark_data->marks;
			$this->attendance = $mark_data->attendance;
			$this->student_id = $mark_data->student_id;
			$this->marks_comment = $mark_data->marks_comment;
			
		}
	}
	public function marks_exist($mark_id)
	{
		global $wpdb;
		
        $query = $wpdb->prepare('SELECT mark_id FROM ' . $wpdb->marks . ' WHERE mark_id = %d', $mark_id);
        $marks = $wpdb->get_var( $query );
		if ( !empty($marks) )
			return true;
		else
			return false;
		
	}
	
	public function save_marks($marks_data)
	{
		
		$table_name = "marks";
		//echo $table_name;
		insert_record($table_name,$marks_data);	
	}
	public function update_marks($marks_data,$mark_id)
	{
		$table_name = "marks";
		return $result=update_record($table_name,$marks_data,$mark_id);
	}
	public function subject_makrs_detail_byuser($exam_id,$class_id,$subject_id,$userid)
	{
		global $wpdb;
		$table_name = $wpdb->prefix . "marks";
		$retrieve_marks = $wpdb->get_row( "SELECT * FROM $table_name WHERE exam_id=".$exam_id." AND class_id =$class_id AND subject_id = $subject_id AND student_id = $userid");
		if(!empty($retrieve_marks))
			return $retrieve_marks;
		else
			return false;
	}
	public function student_subject($class_id)
	{
		global $wpdb;
		$table_name = $wpdb->prefix . "subject";
		return $retrieve_subject = $wpdb->get_results( "SELECT * FROM $table_name WHERE class_id=".$class_id);
	}
	public function get_marks($exam_id,$class_id,$subject_id,$user_id)
	{
		global $wpdb;
		$table_name = $wpdb->prefix . "marks";
		return $retrieve_result = $wpdb->get_var( "SELECT marks FROM $table_name WHERE exam_id = $exam_id AND class_id=".$class_id." AND subject_id = $subject_id AND student_id = $user_id");
	}
	public function get_marks_comment($exam_id,$class_id,$subject_id,$user_id)
	{
		global $wpdb;
		$table_name = $wpdb->prefix . "marks";
		return $retrieve_result = $wpdb->get_var( "SELECT marks_comment FROM $table_name WHERE exam_id = $exam_id AND class_id=".$class_id." AND subject_id = $subject_id AND student_id = $user_id");
	}
	public function get_grade_marks_comment($grade_name)
	{
		global $wpdb;
		$table_name = $wpdb->prefix . "grade";
		return $retrieve_result = $wpdb->get_var( "SELECT grade_comment FROM $table_name WHERE grade_name = '$grade_name' ");
	}
	public function get_attendance($exam_id,$class_id,$subject_id,$user_id)
	{
		global $wpdb;
		$table_name = $wpdb->prefix . "marks";
		return $retrieve_result = $wpdb->get_var( "SELECT attendance FROM $table_name WHERE exam_id = $exam_id AND class_id=".$class_id." AND subject_id = $subject_id AND student_id = $user_id");
	}
	public function get_grade_name($grade_id)
	{
		global $wpdb;
		$table_name = $wpdb->prefix . "grade";
		return $retrieve_result = $wpdb->get_var( "SELECT grade_name FROM $table_name WHERE grade_id = ".$grade_id);
	}
	public function get_grade($exam_id,$class_id,$subject_id,$user_id)
	{
		global $wpdb;
		$tbl_grade = $wpdb->prefix . "grade";
		$tbl_marks = $wpdb->prefix . "marks";
		return $retrieve_result = $wpdb->get_var( "SELECT g.grade_name,m.marks,m.mark_id FROM $tbl_grade  g, $tbl_marks m where 
		exam_id = $exam_id AND class_id=".$class_id." AND subject_id = $subject_id AND student_id = $user_id AND
		m.marks between g.mark_from and g.mark_upto group by m.mark_id");
	}
	public function get_grade_point($exam_id,$class_id,$subject_id,$user_id)
	{
		global $wpdb;
		$tbl_grade = $wpdb->prefix . "grade";
		$tbl_marks = $wpdb->prefix . "marks";
		return $retrieve_result = $wpdb->get_var( "SELECT g.grade_point,m.marks,m.mark_id FROM $tbl_grade  g, $tbl_marks m where 
		exam_id = $exam_id AND class_id=".$class_id." AND subject_id = $subject_id AND student_id = $user_id AND
		m.marks between g.mark_from and g.mark_upto group by m.mark_id");
	}
	public function get_grade_id($marks)
	{
		global $wpdb;
		$tbl_grade = $wpdb->prefix . "grade";
		return $retrieve_result = $wpdb->get_var( "SELECT grade_id FROM $tbl_grade  where $marks between mark_from and mark_upto");
	}
	public function export_marks($exam_id,$class_id)
	{
		global $wpdb;
		$table_name = $wpdb->prefix . "marks";
		return $retrieve_result = $wpdb->get_var( "SELECT marks_comment FROM $table_name WHERE exam_id = $exam_id AND class_id=".$class_id);
	}
	public function export_get_subject_mark($exam_id,$class_id,$sutdent_id,$subject_id)
	{
		global $wpdb;
		$table_name = $wpdb->prefix . "marks";
		
		$retrieve_result = $wpdb->get_row( "SELECT marks FROM $table_name WHERE exam_id = $exam_id AND class_id=".$class_id." AND student_id = $sutdent_id AND subject_id = $subject_id");
		if(!empty($retrieve_result))
			return $retrieve_result->marks;
		else
			return 0;
	}
}
?>