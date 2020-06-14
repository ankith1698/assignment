<?php
$servername="localhost";
$username="root";
$password="";
$dbname="first";

$conn=mysqli_connect("localhost","root","","first");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$a=$_POST["fname"];
$b=$_POST["email"];
$c=$_POST["password"];
$d=$_POST["confirmpassword"];
$e=addslashes(file_get_contents($_FILES["new_pic"]["tmp_name"]));
$sql="INSERT INTO user_log VALUES('$a','$b','$c','$d','$e')";
if($conn->query($sql)===TRUE){
echo "<h1> Successfully Registered</h1>";
}
else
{
echo "Error.".$sql."<br>".$conn->error;
}
$conn->close();
?>
<html>
<head>
<style>
.button1 {
  margin: 30px 0 10px 0;
	height :45px;
	width :365px;
	font-size:20px;
	font-weight:bold;
	border-radius:3px;
	border: 1px solid #3949AB;
}
body
{
	background:url(back.jpg) no-repeat;
background-size:cover;}
</style>
</head>
<body>
<div class="container">
<a href="main.php" target="_blank" ><button type="button" class="button1">Go to login</button></a>
</div>
</body>
</html>







