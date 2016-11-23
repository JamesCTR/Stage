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
  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  <li style="float:right"><a class="active" href="contact.php">Contact</a></li>
</ul>
</header>

<head>

<title>Log in - Trump partij</title>
<div class="coverfront">
    </div> 
    <h2>Gebruikers</h2>
</head>
<link rel="stylesheet" href="CSS.css">
<body>
<section id="Eagle">
  <div id=admin></div>
<div id="index">
  <?php
	require_once "clsControl.php";
	$database = new db();
	$database->GetDbRecords();
?>
</div>
</section>
<div id="footer"><p><center>2016 Trump partij All Rights Reserved.</center></p></div>
</body>
</html>
