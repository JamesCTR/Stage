<?php
	if(isset($_POST['BtnSave']))
	{
	//Include class file
	require_once "clsControl.php";

	//Create instance of a class
	$database = new db();

	//Insert records db
	$database->voornaam = $_POST['voornaam'];
	$database->achternaam = $_POST['achternaam'];
	$database->geslacht = $_POST['geslacht'];
	$database->straat = $_POST['straat'];
	$database->huisnummer = $_POST['huisnummer'];
	$database->opleiding = $_POST['opleiding'];
	$database->werk = $_POST['werk'];
	$database->rekeningnummer = $_POST['rekeningnummer'];
	$database->username = $_POST['username'];
	$database->password = $_POST['password'];
	if ($database->RegisterUser())
	{
		echo "<script>alert('Succesvol opgeslagen.');</script>";
		echo "<script>self.location='Home.php';</script>";
	}
	else
	{
		echo "<script>alert('Fout bij opslaan.');</script>";
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
  <li style="float:right"><a class="active" href="logout.php">Uitloggen</a></li>
  <li style="float:right"><a class="active" href="contact.php">Contact</a></li>
</ul>
</header>

<head>

<title>Registreren - Trump partij</title>
<div class="coverfront">
    </div> 
    <h2><B>Inloggen of registreren</h2></B>
</head>
<link rel="stylesheet" href="CSS.css">
<body>
	<form id=gegevens method="post">
			<p>Vul uw gegevens in:</p>
				<input type="text" name="voornaam" placeholder="Voornaam">
			<br>
				<input type="text" name="achternaam" placeholder="Achternaam">
			<br>
			<input type="text" name="geslacht" placeholder="Geslacht">
			<br>
				<input type="text" name="straat" placeholder="Straat">
			<br>
			<input type="number" name="huisnummer" placeholder="Huisnummer">
			<br>
			<input type="text" name="opleiding" placeholder="Opleiding">
			<br>
			<input type="text" name="werk" placeholder="Werk">
			<br>
			<input type="number" name="rekeningnummer" placeholder="Rekeningnummer">
			<br>
				<input type="text" name="username" placeholder="Gebruikersnaam">
			<br>
				<input type="password" name="password" placeholder="Wachtwoord">
			<br>
				<input type="submit" class="Btnnewrecord" name="BtnSave" value="Opslaan">
			<br>
		</form>
<section id="Eagle">
<div id="reg">

</div>
</section>
<!-- begin wwww.htmlcommentbox.com -->
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">HTML Comment Box</a> is loading comments...</div>
 <link rel="stylesheet" type="CSS.css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1460551833796");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end www.htmlcommentbox.com -->
<div id="footer"><p><center>2016 Trump partij All Rights Reserved.</center></p></div>
</body>
</html>