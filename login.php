<!-- This is the php file for the login page for the College Jeopardy web application
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

if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM user_login WHERE UserName='".$username."' AND Password='".$password."' LIMIT 1";
		$res = mysql_query($sql);
		if (mysql_num_rows($res) == 1){
			echo '<a href="http://localhost/collegejeopardy/Menu.html";">Go to the main page</a>.';
			exit();
		} else {
			echo 'Invalid login information. Please return to the previous page and double check that you are entering your information correctly. If you have not yet registered, you can do so <a href="register">here</a>.';
			exit();
}
}

?>

<!DOCTYPE html PUBLIC " - //W3C//DTD HTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login</title>
</head>
<h1>Log in to College Jeopardy</h1>
<body bgcolor="blue">
<form method="post" action="login.php">
Username: <input type="text" name="username" /><br />
Password: <input type="password" name="password" /><br />
<input type="submit" name="submit" value= "Log In" onclick = "menu()"/>

</form>
<script>
function menu()
window.location.href="http://localhost/collegejeopardy/menu.html";
</script>
</body>

</html>