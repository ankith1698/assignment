<?php
$name=$_POST['name'];
$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","first");

$sql="select * from  user_log where un='$name' && pass='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
echo " <h1>You Have Successfully Logged As Authorized user</h1>";
header("location:wel.php");
}

else
{
echo " <h1>You Have No Acess</h1>";
header("refresh:2,url=main.php");

}
        
     
$conn->close();
?>

