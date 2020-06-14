<?php

?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">

<title>Home page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1 class="label">User Login</h1>
<form class="login_form" method="post" action="log.php">
<div class="font">UserName</div>
<input type="text" name="name" required>
<div class="font2">Password</div>
<input type="password" name="password" required>
<button type="submit" name="iname"> Login</button>
<a href="form1.php" target="_blank" ><button type="button">SignUp</button></a>
</div>
</body>
</html>