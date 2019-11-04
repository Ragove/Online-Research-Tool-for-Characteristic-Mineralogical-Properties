<!DOCTYPE html>
<html>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "<script>
	alert('ERROR! You must Login to Proceed, redirecting to Login...');
	window.location.href='login.php';
	</script>";
    exit;
}
?>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="mineralcolors.css">
<div class="header">
<h2>Identify Minerals</h2>
</div>
</head>
<div  class="column side">
	<div class="sidenav">
	<a href="ph.php">Home Page</a><br>
	<a href="login.php">Login Page</a><br>
	<a href="p1.php">Query Page</a><br>
	<a href="p2.php">Insert Page</a><br>
	<a href="p3.php">Database Changelog</a><br>
	<a href="quiz.php">Can you Identify these Minerals?</a><br>
	<a href="quiz2.php">Take a practice Quiz!</a><br>
	</div>
</div>
<body>
<div class="column middle">
 <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
var form = document.querySelector("form");
var log = document.querySelector("#log");

form.addEventListener("button", function(event) {
  var data = new FormData(form);
  var output = "";
  for (const entry of data) {
    output = output + entry[0] + "=" + entry[1] + "\r";
  };
  log.innerText = output;
  event.preventDefault();
}, false);
</script>
<form>
<div>
<?php
$servername = "localhost";
$username = "root";
$password = "legitpassword1";
$dbname = "mineral";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $generate = rand(1, 17);
  $sql = "SELECT * FROM quiz WHERE qnum = $generate;";
  $result = mysqli_query($conn, $sql); 
 
  while ($row = mysqli_fetch_assoc($result)) {

  $answer = $row['correct'];
  $image = " $answer.jpg ";
  echo "<tr><td>Can you Identify This Mineral?: &nbsp;"; echo "<br>";
  echo "<img src=\" $image\" />";
  echo "<tr><td><br>Hint: &nbsp;"; echo $row['answera']; 
  echo "<tr><td><br>Hint: &nbsp;"; echo $row['answerb']; echo "</td></tr>";
  echo "<tr><td><br>Hint: &nbsp;"; echo $row['answerc']; echo "</td></tr> ";
  echo "<tr><td><br>Hint: &nbsp;"; echo $row['answerd']; echo "<br><br><br></td></tr>";
  echo "<tr><td><input type='button' value=\"Answer\" onclick=\"myFunction()\" /> <button type=\"button\" onClick=\"window.location.reload();\">New Question</button>
	
	<div id=\"myDIV\" style=\"display:none;\">
	<br><br>
	 The correct answer is $answer
	</div> </button></td></tr>"; 

  }
?>
</div>
</form>
<pre id="log">
</pre>
</div>

</body>
<div class="column side">
<p>You are currently signed in as <?php echo htmlspecialchars($_SESSION["username"]); ?>. <br><a href="logout.php" >Click here to sign out!</a></p>
</div>
<div class ="footer">
<footer>
<p>Copyright 2019, Alexander Lyssy<br> UTPB Graduate Degree Program Use Only</p>
</footer>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>