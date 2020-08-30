<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<title>Document</title>
</head>
<body> 
<?php
include 'connection.php';
//this below querry (asign to $querry variable) will fetch the data using join operation from various tables as mentioned below
$querry = "SELECT * FROM `user_table` INNER JOIN `student_data` on user_table.id = student_data.user_id INNER JOIN `class_table` on student_data.id = class_table.student_id INNER JOIN `subject_table` on student_data.id = subject_table.student_id";  
$run = mysqli_query($conn , $querry);
if(mysqli_num_rows($run)>0){ ?>
<div class="container">
<h1 class="mb-3">Student Data</h1>
    <table  class="table table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">UserName</th>
      <th scope="col">Usertype</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">ClassName</th>
      <th scope="col">Course</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
    <?php
    // $$row=mysqli_fetch_assoc($run) will fectching the data from $run and put that into an associate array
	while($row=mysqli_fetch_assoc($run)){
        ?>
         <!-- // below $row[fieldname] is basically writing the table data to table row  -->
		<tr>
        <td><?php echo $row['student_id'] ?></td>
        <td><?php echo $row['Username'] ?></td>
        <td><?php echo $row['Usertype'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['Phone'] ?></td>
        <td><?php echo $row['Classname'] ?></td>
        <td><?php echo $row['course'] ?></td>
        <td><a href="/Dummy/updateform.php?id=<?php echo $row['student_id']?>"><button type="submit" class="btn btn-dark">Edit</button></a></td>
        <td><a href="/Dummy/delete.php?id=<?php echo $row['student_id']?>"><button type="submit" class="btn btn-dark">Delete</button></td>
        </tr>
        <?php
    }
    ?>
    </table>
    </div><?php 
}
?>
<?php
include 'connection.php';
//this will select the full data from the user_table and teacher_table using join operation
$querry = "SELECT * FROM `user_table` INNER JOIN `teacher_table` on user_table.id = teacher_table.user_id";   
$run = mysqli_query($conn , $querry);
if(mysqli_num_rows($run)>0){ ?>
<div class="container">
<h1 class="mb-3">Teacher Data</h1>
    <table  class="table table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">UserName</th>
      <th scope="col">Usertype</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
    <?php
	while($row=mysqli_fetch_assoc($run)){
        ?>
        <!-- // below $row[fieldname] is basically writing the table data to table row  -->
		<tr>
        <td><?php echo $row['user_id'] ?></td>
        <td><?php echo $row['Username'] ?></td>
        <td><?php echo $row['Usertype'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['Phone'] ?></td>
        <td><a href="/Dummy/updateform.php?id=<?php echo $row['user_id']?>"><button type="submit" class="btn btn-dark">Edit</button></a></td>
        <td><a href="/Dummy/teacher_del.php?id=<?php echo $row['user_id']?>"><button type="submit" class="btn btn-dark">Delete</button></a></td>
        </tr>
        <?php
    }
    ?>
    </table>
    </div><?php 
}
?>
