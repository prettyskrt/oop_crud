<?php
include "db/dbconfig.php";

if(isset($_POST['add'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cys = $_POST['course_year_section'];

	$addStudent = new myDB();
	$addStudent->insert('tbl_students',['full_name'=>$name,'email'=>$email,'course_year_section'=>$cys]);

	header("location: index.php");
}

?>