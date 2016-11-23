<?php
//Classes

class db{
//DB variabelen (class level data)
protected $user;
protected $pw;
protected $database;
protected $hostname;


//Construct function (incl. arguments)
public function __construct(){
$this->user = "root";
$this->pw = "";
$this->database = "5a";
$this->hostname = "localhost";


}
public function getSingleDbRecord($sid)
{
$con = new mysqli($this->hostname,$this->user,$this->pw, $this->database);
if(!$con){die("Fout bij verbinden met database");}
$sql = "SELECT sid, voornaam, achternaam, geslacht, straat, huisnummer, opleiding, werk, rekeningnummer FROM studenten WHERE sid=$sid";
$stmt = $con->prepare($sql);
$stmt->execute();
$stmt->bind_result($sid, $voornaam, $achternaam, $geslacht, $straat, $huisnummer, $opleiding, $werk, $rekeningnummer);
while ($stmt->fetch())
{
$v = $voornaam;
$a = $achternaam;
$g = $geslacht;
$s = $straat;
$h = $huisnummer;
$o = $opleiding;
$w = $werk;
$n = $rekeningnummer;
$r = array($v,$a,$g,$s,$h,$o,$w,$n);
}
return $r;
}

public function getsid($sid)
{
$con = new mysqli($this->hostname,$this->user,$this->pw, $this->database);
if(!$con){die("Fout bij verbinden met database");}
$sql = "SELECT sid FROM studenten WHERE sid=$sid";
$stmt = $con->prepare($sql);
$stmt->execute();
$stmt->bind_result($sid);
return $sid;
}
public function GetDbRecords()
{
$con = new mysqli($this->hostname,$this->user,
                    $this->pw, $this->database);

if(!$con)
{
die("Fout bij verbinden met database");
}

$sql = "select sid, voornaam, achternaam, geslacht, straat, huisnummer, opleiding, werk, rekeningnummer from studenten";

$stmt = $con->prepare($sql);
$stmt->execute();

$stmt->bind_result($sid, $voornaam, $achternaam, $geslacht, $straat, $huisnummer, $opleiding, $werk, $rekeningnummer);

?>

<table class ="table">
<tr>
<td>Voornaam</td>
<td>Achternaam</td>
<td>Geslacht</td>
<td>Straat</td>
<td>Huisnummer</td>
<td>Opleiding</td>
<td>Werk</td>
<td>Rekeningnummer</td>
<td><a title='Nieuw record' href='newrecord.php'><img src='new.png'></a></td>
</tr>

<?php
while ($stmt->fetch())
{
echo "<tr>
<td>$voornaam</td>
<td>$achternaam</td>
<td>$geslacht</td>
<td>$straat</td>
<td>$huisnummer</td>
<td>$opleiding</td>
<td>$werk</td>
<td>$rekeningnummer</td>
<td><a title='Edit record' href='edit.php?record=$sid'><img src='edit.png'></a></td>
<td><a title='Delete record' href='deleterecord.php?record=$sid'><img src='delete.png'></a></td>
</tr>";
}
//Opruimen:-)
$stmt->close();
}

public function RegisterUser(){
if($con = new mysqli($this->hostname,$this->user,
                    $this->pw, $this->database)){

// Voorbereiden (prepare) en Bind
// "sss is de subst mogelijke waarden: ?, ?, ?"
// i - integer
// d - double
// s - string
// b - BLOB

$stmt = $con->prepare("INSERT INTO studenten
(voornaam, achternaam, geslacht, straat, huisnummer, opleiding, werk, rekeningnummer, username, password)
 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssississ", $this->voornaam, $this->achternaam, $this->geslacht, $this->straat, $this->huisnummer, $this->opleiding, $this->werk, $this->rekeningnummer, $this->username, $this->password);
$this->password = sha1($this->password);
$stmt->execute();

//Opruimen:-)
$stmt->close();
$con->close();

return true;
}
else{
return false;
}

}

}

class user extends db{
//Form Data
protected $voornaam;
protected $achternaam;
protected $geslacht;
protected $straat;
protected $huisnummer;
protected $opleiding;
protected $werk;
protected $rekeningnummer;
protected $username;
protected $password;
}

?>
