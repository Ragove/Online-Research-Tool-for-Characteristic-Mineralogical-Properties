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
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="mineralcolors.css">
<div class="header">
<h2>Identify Minerals</h2>
</div>
</head>
<body>
<div  class="column side">
	<div class="sidenav">
	<a href="ph.php">Home Page</a><br>
	<a href="login.php">Login Page</a><br>
	<a href="identify.php">Identification Help</a><br>
	<a href="p1.php">Query Page</a><br>
	<a href="p2.php">Insert Page</a><br>
	<a href="p3.php">Database Changelog</a><br>
	<a href="quiz.php">Can you Identify these Minerals?</a><br>
	<a href="quiz2.php">Take a practice Quiz!</a><br>
	</div>
</div>
    <div class="column middle">
        <h1>So you need help identifying Minerals?</h1>
		<p><button onclick="myFunction()">Hardness</button><button onclick="myFunction2()">Color</button> </p><br>
		<div class = "cent1" id="myDIV">		
		<p>Mineral Identification is a vast and complicated topic, and not the easiest one to understand. Every mineral is defined by the unique combination of many different characteristics. Characteristics are derived from a minerals orogeny, chemical structure, and age.  
		Minerals are inorganic crystalliing solids with a unform structure at the molecular level, however it is entirely possible for minerals to contain contaminations, which can drasticall alter their shape or color. This can make identification incredibly difficult with over 5 thousand known differnt types of 
		minerals and their Psuedomorphs. Fortunately there is a series of tests anyone with the proper tools can preform to narrow down and exactly Identify any mineral. Click any button above to learn more about how to identify that property.</p>
		</div>
	</div>
</body>
<div  class="column oside">
	<p>Did you know that minerals are always solid and have a distinctive geometric shape called a crystalline structure? </p><br>
	<p>You are currently signed in as <?php echo htmlspecialchars($_SESSION["username"]); ?>. <br><a href="logout.php">Click here to sign out!</a></p>
</div>
<div class ="footer">
<footer>
<p>Copyright 2019, Alexander Lyssy<br> UTPB Graduate Degree Program Use Only</p>
</footer>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML) {
    x.innerHTML = "Mineralogists use the Mohs Hardness Scale, which goes from 1-10 and every mineral will fall between these numbers somewhere."+ 
	"There are modern testing kits that can accurately determine the specimen by finding what will scratch the mineral, however certain points along the scale can be found using everday materials."+
	" In order to determine the hardness of a specimen, simply try to scratch the piece with the items listed, or try to scratch the known hardness item (like glass), with the specimen."+
	"If you are able to scratch the piece, than the hardness is less than the item you used to scratch it with. If you can't, the specimen has a higher hardness.<br>"+
	"<div class = 'cent1'><table class='steelBlueCols' id='tables1'>"+	
	"<tr><th>Mohs Hardness</th><th>Mineral Equivalent</th><th>Scratch Test</th></tr>"+
	"<tr><td>1</td><td>Talc</td><td>Scrapable with Fingernail</td></tr>"+
	"<tr><td>2</td><td>Gypsum</td><td>Scratchable with Fingernail</td></tr>"+
	"<tr><td>3</td><td>Calcite</td><td>Scratchable with Penny(Copper)</td></tr>"+
	"<tr><td>4</td><td>Fluorite</td><td>Easily Scratchable with a Knife</td></tr>"+
	"<tr><td>5</td><td>Apatite</td><td>Scratchable by Knife</td></tr>"+
	"<tr><td>6</td><td>Orthoclase</td><td>Scratchable with Steel File</td></tr>"+
	"<tr><td>7</td><td>Quartz</td><td>Scratches Window Glass</td></tr>"+
	"<tr><td>8</td><td>Topaz</td><td>Scratches Quartz</td></tr>"+
	"<tr><td>9</td><td>Corundum</td><td>Scratches Topaz</td></tr>"+
	"<tr><td>10</td><td>Diamond</td><td>Scratches Corundum</td></tr>"+
	"</table></div>";
  }
}
function myFunction2() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML) {
    x.innerHTML = "Color is the easiest trait to identify, but it can also be the most misleading. Any contamination within the crystallinge structure could affect the resulting color."+
	" It is highly reccomend instead to use color to eliminate potential minerals instead of as a gaurenteed identifier. This database only uses the PRIMARY color of a mineral, therefore you should be wary when using "+
	"the searchability functionality for misleading results and only fill in the color option if you are 100&percnt; certain of the main color.";
  }
}
</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>