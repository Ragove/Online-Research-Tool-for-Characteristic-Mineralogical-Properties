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

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="mineralcolors.css">
<div class="header">
<h2>Query Results</h2>
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
<div class = "cent2">
<?php
$servername = "localhost";
$username = "root";
$password = "legitpassword1";
$dbname = "mineral";

$hard = $_GET['hard'];
$reac = $_GET['reac'];
$twin = $_GET['twin'];
$streak = $_GET['streak'];
$color = $_GET['color'];
$cleavage = $_GET['cleave'];
$fracture = $_GET['frac'];
$sys = $_GET['sys'];
// Create connection
$conn = new PDO('mysql:host=localhost;dbname=mineral', 'root', 'legitpassword1');

$query = 
		 "SELECT * FROM mineralhome JOIN chemical ON mineralhome.Mineral_id = chemical.Mineral_id 
		 JOIN crystal ON mineralhome.Mineral_id = crystal.Mineral_id 
		 JOIN physical ON mineralhome.Mineral_id = physical.Mineral_id
		 JOIN optical ON mineralhome.Mineral_id = optical.Mineral_id 
		 WHERE mineralhome.Mineral_id IS NOT NULL
		 ";
if ($reac){
	$query .= " AND chemical.HCL = :reac";
}
if ($hard) {
	$query .= " AND physical.hardness = :hard";
}
if ($twin) {
	$query .= " AND crystal.twin = :twin";
}
if ($streak) {
	$query .= " AND physical.streak = :streak";
}
if ($color) {
	$query .= " AND physical.color = :color";
}
if ($cleavage) {
	$query .= " AND physical.cleavage = :cleavage";
}
if ($fracture) {
	$query .= " AND physical.fracture = :fracture";
}
if ($sys) {
	$query .= " AND crystal.sys = :sys";
}
 $query .= ";";
 $stmt = $conn->prepare($query);
 
if ($reac) {
	$stmt->bindValue(':reac', $reac);
}
if ($hard) {
	$stmt->bindValue(':hard', $hard);
}
if ($twin) {
	$stmt->bindValue(':twin', $twin);
}
if ($streak) {
	$stmt->bindValue(':streak', $streak);
}
if ($color) {
	$stmt->bindValue(':color', $color);
}
if ($cleavage) {
	$stmt->bindValue(':cleavage', $cleavage);
}
if ($fracture) {
	$stmt->bindValue(':fracture', $fracture);
}
if ($sys) {
	$stmt->bindValue(':sys', $sys);
}
$stmt->execute();
 echo "<h2>Potential Candidate Minerals</h2>";
 echo "<table class = 'steelBlueCols'>";
 echo "<tr><th>Name</th><th>Description</th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_BOTH))
{
	 

	echo "<tr><td>";
	echo $row['mname'];
	echo "</td><td>";
	echo $row['des'];
	echo "</td><tr>";
}
echo "</table>";
?>

</div></div>
<div class="column side">
<p>You are currently signed in as <?php echo htmlspecialchars($_SESSION["username"]); ?>. <br><a href="logout.php" >Click here to sign out!</a></p>
</div>
</div>
</body>

<div class ="footer">
<footer>
<p>Copyright 2019, Alexander Lyssy<br> UTPB Graduate Degree Program Use Only</p>
</footer>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>