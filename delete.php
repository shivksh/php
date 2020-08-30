<?php

include 'connection.php';
$id = $_GET['id'];

//these below querries are for the deletion of student table data using main user table
$class_del = "DELETE FROM `class_table` WHERE student_id = $id";  
$class_suc = mysqli_query($conn , $class_del);

$sub_del = "DELETE FROM `subject_table` WHERE student_id = $id";  
$sub_suc = mysqli_query($conn , $sub_del);


$stu_del = "DELETE FROM `student_data` WHERE user_id = $id";  
$stu_suc = mysqli_query($conn , $stu_del);


$user_del = "DELETE FROM `user_table` WHERE id = $id";  
$user_suc = mysqli_query($conn , $user_del);

if($user_suc){
    echo 'Deleted Successfully';
  }



?>