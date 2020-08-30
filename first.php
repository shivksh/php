<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- // simple html form file and that field data will be send to insert_data.php file using post method  -->
<form action="insert_data.php" method="POST">   
<label>Name</label><input type="text" name="name"><br>
<label>UserType</label>
  <select  name="type"  id="select" onclick="check()" >
    <option value="Student">Student</option>
    <option value="Teacher"  >Teacher</option>
  </select>
<label>Email</label><input type="email" name="email">
<label>Phone</label><input type="text" name="phone">
<label  id="field1" >Classname</label><input type="text" id="myText" name="class">
<label  id="myTxt" >Subject</label>
<select  name="subject" id="myTxnt" name="class">
    <option value="PCM">PCM</option>
    <option value="PCB">PCB</option>
  </select>
<input type="submit" name="submit">
    </form>
<script>
function check()   //javascript for when user select the teacher than some field will be hidden
{
    if(document.getElementById('select').value == 'Teacher' )
{
  document.getElementById("myText").style.display = "none";
  document.getElementById("myTxt").style.display = "none";
  document.getElementById("myTxnt").style.display = "none";
  document.getElementById("field1").style.display = "none";
}
}
</script>
</body>
</html>