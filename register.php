<!-- This is the php file for the register page for the College Jeopardy web application
	Developed by Javier Flores, John Maurer, Danilo Morales-->
<html>
<head>
<style>

body {
	text-align: center;
	color: gold;
	}
</style>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "questions";

@mysql_connect($host, $user, $pass);
mysql_select_db($db);

@$fname = $_POST['fname'];
@$lname = $_POST['lname'];
@$email = $_POST['email'];
@$username = $_POST['username'];
@$password = $_POST['password'];

$insert = 'INSERT into user_login(First_Name, Last_Name, Email, UserName, Password) VALUES("'.$fname.'","'.$lname.'", "'.$email.'", "'.$username.'", "'.$password.'")';

mysql_query($insert);
?>
<!DOCTYPE html PUBLIC " - //W3C//DTD HTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Register</title>
</head>
<h1>Register for College Jeopardy</h1>
<body bgcolor="blue">
<form method="post" action="register.php">
First Name: <input type="text" name="fname" /><br />
Last Name:&nbsp; <input type="text" name="lname" /><br />
Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name = "email" /> <br />
Username: <input type="text" name="username" /><br />
Password:&nbsp; <input type="password" name="password" /><br />
<input type="submit" name="submit" value= "Register" onclick="menu()"/>

</form>

<script>
function menu(){
	window.location.href="http://localhost/collegejeopardy/Menu.html"
}
</script>
</body>

</html>