<html>
<head>
<style>
<!--Css style for the entire page -->
.button {
    background-color: transparent;
    border: 2px solid gold;
    color: gold;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
body {
	text-align: center;
	color: gold;
	}

</style>
</head>
<body style= "background-color:blue;">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questions";//name of the database in MYSQL


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$question = "SELECT Question
FROM question_answer
WHERE Category ='Database Management Systems'
AND CategoryLevel = 100
LIMIT 1 "; //sql statement to display questions
$result = $conn->query($question);  //send the query to the database and save results in $result

//Puts questions into an associative array
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> <h2>". $row["Question"]. "</h2><br>";
		 echo "<br>";
		$_POST = $row['Question'];
		
     }
} else {
     echo "0 results";
}
$conn->close();//Close connection
echo "<br>";
?>  




<script>
function countDown(secs,elem) {
	var element = document.getElementById(elem);
	element.innerHTML = "<h2>"+secs+" seconds left </h2>";
	if(secs < 1) {
		clearTimeout(timer);
		window.alert("The answer was ")
		window.location.href="http://localhost/collegejeopardy/categories.html";
		
	}
	secs--;
	var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
}
</script>

<span id= "status"></span>
<script>countDown(10,"status");</script>

<script>
function answer(value){
	if value = "A"{
		window.alert("Correct");
		window.location.href="http://localhost/collegejeopardy/categories.html";
	}else{
	window.alert("The answer was A")
	window.location.href="http://localhost/collegejeopardy/categories.html";
	
	}
}
</script>




</body>
</html>