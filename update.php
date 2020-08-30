<?php
include 'connection.php';
$id = $_GET['id'];
 $name=$_POST['name'];
 $type=$_POST['type'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $class=$_POST['class'];
 $sub=$_POST['subject'];


 //below is updation querries for various table in the repective table field using post method

$class_upd = "UPDATE `class_table` SET `Classname`= $class ,`Studentname`= $name,`Email`= $email,`Phone`= $phone WHERE `student_id` = $id ";  
$class_upd_suc = mysqli_query($conn , $class_upd);


$sub_upd = "UPDATE `subject_table` SET `Username`=$name,`Email`=$email,`Phone`=$phone,`course`=$sub WHERE `student_id` = $id";  
$sub_upd_suc = mysqli_query($conn , $sub_upd);


$stud_upd = "UPDATE `student_data` SET `Username`=$name,`Email`=$email,`Phone`= $phone WHERE `user_id` = $id";  
$stud_upd_suc = mysqli_query($conn , $stud_upd);


$user_upd = "UPDATE `user_table` SET `Username`= $name,`Usertype`= $type WHERE `id` = $id";  
$user_upd_suc = mysqli_query($conn , $user_upd);

if($user_upd_suc){
  echo 'Data Updated Successfully';
}

?>