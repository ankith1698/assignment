<?php 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>signup page</title>
<link rel="stylesheet" href="style1.css">
<script type="text/javascript">
function validation(){
var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtCPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
</head>
<body>
<div class="container">
<h1 class="label">Sign Up</h1>
<form class="sign_form" name="myform" method="post" onsubmit="return validation()" action="asd.php" enctype="multipart/form-data">
<div class="font">UserName</div>
<input type="text" name="fname" required>
<div class="font">email</div>
<input type="text" name="email" required>
<div class="font">Password</div>
<input type="password" name="password" id="txtPassword" required>
<div class="font">Confirm Password</div>
<input type="password" name="confirmpassword" id="txtCPassword" required>
<div class="font">*photo</div>
<input type="file" name="new_pic" id="new_pic" accept="image/*" required>

<div><button type="submit" >Register</button></div>
</body>
</html>