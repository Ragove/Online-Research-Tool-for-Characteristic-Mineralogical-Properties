<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="mineralcolors.css">
<div class="header">
<h2>Login Page</h2>
</div>
<div  class="column side">
	<div class="sidenav">
	<a href="ph.php">Home Page</a><br>
	<a href="login.php">Login Page</a><br>
	</div>
</div>
</head>
 <body>
 	<?php
	session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 date_default_timezone_set('America/Chicago');
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $level = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password, level FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password, $level);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;   
							$_SESSION["level"] = $level;  							
                            
							$datetimep1 = date("Y-m-d h:i:sa");

							$sql2 = "SELECT * FROM audittable2 WHERE DATETIMEp IN 
							(SELECT max(DATETIMEp) FROM audittable2 where useraud = '$username');";
							$stmt2 = $mysqli->prepare($sql2);
							$stmt2->execute();
							$stmt2->bind_result($useraud, $DATETIMEp);
							$stmt2->fetch();
							$visited = $DATETIMEp;
							
							$_SESSION["visited"] = $visited;  
							$stmt2->close();
							// Store Session Variables
							$sql1 = "UPDATE users SET DATETIMEp = '$datetimep1' where username = '$_POST[username]';";
							$stmt1 = $mysqli->prepare($sql1);
							$stmt1->execute();
							$stmt1->close();
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>
<div class = "column middle">
		
        <h2>Login</h2><br>
        <p>You must Login to access the full functionality of the site.</p><br>
		<div class="cent1">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<tr><th><th></th></th>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <td><label>Username</label></td>
                <td><input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span></td>
            </div> <br>   
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
               <td> <label>Password </label></td>
                <td><input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span></td>
            </div>
		</tr>	
            <div class="form-group">
                <br><input type="submit" class="btn btn-primary" value="Login">
            </div>
            <br><p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
		</div>
	</div>
	
<div  class="column oside">

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