<?php


include 'connection.php';
$id = $_GET['id'];

//these below querries are for the deletion of teacher table suing main user table data
$teacher_del = "DELETE FROM `teacher_table` WHERE user_id = $id";  
$tea_suc = mysqli_query($conn , $teacher_del);


$user_del = "DELETE FROM `user_table` WHERE id = $id";  
$user_suc = mysqli_query($conn , $user_del);
if($user_suc){
    echo 'Data Deleted Successfully';
}

?>