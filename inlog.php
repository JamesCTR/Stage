<?php

	//Do we need to process the login?
	if (isset($_POST['btnLogin'])){
	
	//Read captured user data
	$username  = $_POST['username'];
	$password  = $_POST['password'];
	
	//Create params
	//$hostname = "localhost";
	//$username = "root";
	//$password = "";
	//$dbname = "5a";

	//Define Constants & Params
	define("HOSTNAME", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "");
	define("DBNAME", "5a");

	//Include the functions file
	include "f_login.php";
	
	if (!$uid = checkLogin($username, $password)){
		//Unsuccessful: Show error message
		echo "<script>alert('Credentials zijn ongeldig!');</script>";
	}
	else{		
		//If the function call returns a value, the user credentials
		//are ok. Now initiate a session and set the session var
		session_start();
		$_SESSION['userid'] = $uid;
		
		//Proceed to custom page
		echo "<script>self.location='Home.php';</script>";
		
	}
}

?>

<Doctype html>
<html>
<header>
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="PJ.php">Politiek-juridisch</a></li>
  <li><a href="SE.php">Sociaal-Economisch</a></li>
  <li><a href="SC.php">Sociaal-Cultureel</a></li>
  <li><a href="Agenda.php">Agenda</a></li>
  <li><a href="Politici.php">Politici</a></li>
  <li><a href="index.php">Gebruikers</a></li>
  <li style="float:right"><a class="active" href="logout.php">Inloggen</a></li>
  <li style="float:right"><a class="active" href="contact.php">Contact</a></li>
</ul>
</header>

<head>

<title>Inloggen - Trump partij</title>
<div class="coverfront">
    </div> 
    <h2><B>Log in:</h2></B>
</head>
<link rel="stylesheet" href="CSS.css">
<body>
<section id="Eagle">
<div id="inlog">
		
		
			<form method="post" action="inlog.php">
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password"></td>
				</tr>				
				<tr>
					<td></td>
					<td><input type="submit" class="myButton" name="btnLogin" value="Login" class="search"> 
					   <!-- <input type="submit" name="btnList" value="List Records"> -->
					</td>
				</tr>
			</form>
		</table>
		<center><a href="newrecord.php">Registreren</a></center>
		</div>
</section>
<div id="footer"><p><center>2016 Trump partij All Rights Reserved.</center></p></div>
</body>
</html>