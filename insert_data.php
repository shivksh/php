<?php
include 'connection.php'; //make connection from database using another file
$name=$_POST['name'];
$type=$_POST['type'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$class=$_POST['class'];
$sub=$_POST['subject'];

//inserting data to table user_table using data from form first.php using post method
$sql = "INSERT INTO user_table (Username,Usertype) VALUES ('$name','$type')";
$run=mysqli_query($conn,$sql);
if($run){
        $last_id = $conn->insert_id;  //this last_id variable will have last inserted data's id
}

if($type == 'Teacher'){
 $teacher_insert = "INSERT INTO teacher_table (user_id,Username,Email,Phone) VALUES ('$last_id','$name','$email','$phone')";
$dd=mysqli_query($conn,$teacher_insert);

}
//insert into stuudet_data 
if($type == 'Student'){
    $student_insert = "INSERT INTO student_data (user_id,Username,Email,Phone) VALUES ('$last_id','$name','$email','$phone')";
   $equal=mysqli_query($conn,$student_insert);
   if($equal){
    $equal = $conn->insert_id;  //this equal variable will have last inserted data's id
   }
   $class_insert = "INSERT INTO class_table (student_id,Studentname,Email,Phone,Classname) VALUES ('$equal','$name','$email','$phone','$class')";
   $class_data=mysqli_query($conn,$class_insert);
   if($class_data){
   }
   $stu_insert = "INSERT INTO subject_table (student_id,Username,Email,Phone,course) VALUES ('$equal','$name','$email','$phone','$sub')";
   $stu_data=mysqli_query($conn,$stu_insert);
   if($stu_data){
       echo 'Data inserted Successfully';
   }
}

?>