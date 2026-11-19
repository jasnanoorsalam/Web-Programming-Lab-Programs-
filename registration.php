<html>
<head>
<title>registration form</title>
</head>
<body>
<h1>registration form</h1>
<form action=""method="POST">
<label>username:</label>
<input type="text"
name="username"><br><br>
<label>email:</label>
<input type="email"
name="email"><br><br>
<label>password:</label>
<input type="password"
name="pass"><br><br>
<label>conform password:</label>
<input type="password"
name="cpass"><br><br>
<input type="submit"value="register">
</form>
<?php
if($_SERVER['REQUEST=$_METHOD']=="POST"){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    
    
if($empty($username)||empty($email)||empty($email)||empty($cpass)){
echo"<p style='color:red;'>please fill all required fields!<p>";
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
echo"<p style='color:red;'>please enter a valid email address!>/p>";
}elseif($pass!=$cpass){
echo"<p style='color:red;'>password and confirm password should match!</p>";
}else{
echo"<p style='color:green;'>registration sucessful!</p>";
}
}
?>
</body>
</head>


