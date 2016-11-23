<?php
//Include class file
include "clsControl.php";
//Create instance of class
if(isset($_GET['record']))
{
		$te_updaten_id = $_GET['record'];
		$database = new db();
		$r = $database->getSingleDbRecord($te_updaten_id);

}
	$rid = $_GET['record'];
	$database = new db();
	$r = $database->getsid($rid);
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$con = mysql_connect($dbhost, $dbuser, $dbpass);
	$sql = "DELETE FROM studenten WHERE sid=$r";
	mysql_select_db('5a');
	$resultaat = mysql_query ($sql, $con);
if(!$resultaat)
{
	die ("Could not delete data: " . mysql_error());
}
mysql_close($con);
header("Location: index.php");

?>
