<?php

session_start();
if(isset($_POST['login'])){
    require 'connect.php';
    $user=$_POST['Email'];
    $pass=$_POST['password'];
    $result=$conn->query('select e_mail,password,first_name from users where e_mail="'.$user.'" and password="'.$pass.'"');
    if(mysqli_num_rows($result))
    {
       $row=mysqli_fetch_row($result);
     $_SESSION['username']=$row[2];
	 alert("Welcome ".$_SESSION['username']);
     echo '<script>window.location.href = "index.html";</script>';
    }
    else {
        alert('Invalid account');
        
    }
}
?>
<html>
 <head>
 <title>Log In</title>
  <meta charset="UTF-8">
   <link rel="stylesheet" href="css/styleLogin.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <title>Index</title>
</head>
<body>
<div class="Login">
<i class="material-icons">person</i>
<form method="post"> 
	<p>E-mail</p>
	<input type="email" name="Email">
	<p>Parolă</p>
    <input type="password" name="password">
	<input type="submit" name="login" value="Loghează-te">
	</form>
	
	</div>
</body>
</html>
