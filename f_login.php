<?php

function checkLogin($username, $password){
	//Create database connection and check for errors
	if(!$con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD,
	                          DBNAME)){
		die("Fout bij verbinden met database!");}
						  
	//Construct SQL query
	$sqlquery = "Select sid, username, password from studenten WHERE 
	                    username='$username' and password=sha1('$password')";
	
	//Execute SQL query against MySQL DB and check for errors
	if(!$result = mysqli_query($con, $sqlquery)){
		die("Fout in query!");
	}	
	
	//Create null value (if no db match then still var not undefined)
	$dbid = 0;
	
	//Loop through array data (result set)
	while($row = mysqli_fetch_array($result)){		
		$u = $row["username"];
		$p = $row["password"];
		$dbid = $row["sid"];	
	}	
		
		return $dbid;
}

function securityCheck(){
		
	if ($_SESSION['userid'] > 0){
		return true;
	}
	else{
		return false;
	}
		
}

?>