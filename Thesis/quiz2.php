<html>

<?php require 'config.php';
session_start(); ?>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="mineralcolors.css">
<div class="wrapper">

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
<body style= "background-color: #EFEFF0;">
<div class="column middle">
<div = "cent3">
<h2> Take a quiz you might find in any Geology 101 class!</h2>

<?php 															
					if (isset($_POST['click']) || isset($_GET['start'])) {
						@$_SESSION['clicks'] += 1 ;
					$c = $_SESSION['clicks'];
						if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
						
						$fetchqry2 = "UPDATE `quiz2` SET `userans`='$userselected' WHERE `id`=$c-1"; 
					$result2 = mysqli_query($mysqli,$fetchqry2);
						}
		
 					} else {
						$_SESSION['clicks'] = 0;
					}
																
						//echo($_SESSION['clicks']);
						?>
<br><form><?php if($_SESSION['clicks']==0){ ?> <button class="button" name="start" >Begin the Quiz!</button> <?php } ?></form>
<form action="" method="post">  				
<table><?php if(isset($c)) {   $fetchqry = "SELECT * FROM `quiz2` where id='$c'"; 
				$result=mysqli_query($mysqli,$fetchqry);
				$num=mysqli_num_rows($result);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
		  ?>
<tr><td><h3><br><?php echo @$row['que'];?></h3></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 11){ ?>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 1'];?>">&nbsp;<?php echo $row['option 1']; ?><br>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 2'];?>">&nbsp;<?php echo $row['option 2'];?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 3'];?>">&nbsp;<?php echo $row['option 3']; ?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 4'];?>">&nbsp;<?php echo $row['option 4']; ?><br><br><br></td></tr>
  <tr><td><button class="button3" name="click" >Next</button></td></tr> <?php }  
																	?> 
  
 <?php if($_SESSION['clicks']>10){ 
	$qry3 = "SELECT `ans`, `userans` FROM `quiz2`;";
	
	$result3 = mysqli_query($mysqli,$qry3);
	$storeArray = Array();
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['ans']==$row3['userans']){
		 @$_SESSION['score'] += 1 ;
		 echo  "<br><br> Your answer of "; echo $row3['userans']; echo " <span style='color: #ffffff; background-color: #00ff00'>was correct!</span>";
	 } else { echo  "<br><br> Your answer of "; echo $row3['userans']; echo " <span style='color: #ffffff; background-color: #ff0000'>was incorrect!</span>";
	 }
}

 ?> 
 </table>
 <h2>Result</h2>
 <span>No. of Correct Answer:&nbsp;<?php echo $no = @$_SESSION['score']; ?></span><br>
 <span>Your Score:&nbsp <?php echo $no*10; ?></span>

<?php
$scores = @$_SESSION['score'];
$useraud = @$_SESSION['username'];
 require_once "config.php";
 $sql1 = "UPDATE users SET quizhistory = '$scores' where username = '$useraud';";
 $stmt1 = $mysqli->prepare($sql1);
 $stmt1->execute();
 $stmt1->close();
 ?>
 <?php } ?>
 <!-- <script type="text/javascript">
    function radioValidation(){
		/* var useransj = document.getElementById('rd').value;
        //document.cookie = "username = " + userans;
		alert(useransj); */
		var uans = document.getElementsByName('userans');
		var tok;
		for(var i = 0; i < uans.length; i++){
			if(uans[i].checked){
				tok = uans[i].value;
				alert(tok);
			}
		}
    }
</script> -->
</div>
</body>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>