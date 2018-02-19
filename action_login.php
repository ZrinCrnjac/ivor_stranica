<?php
include_once 'konfiguracija.php';
if(!isset($_POST["korisnik"]) || !isset($_POST["korisnik"])){
	header("location: index.php");
}

$izraz=$veza->prepare("select * from korisnik where username=:username and password=:password");
$izraz->execute(array("username"=>$_POST["username"], "password" =>$_POST["password"]));
$korisnik = $izraz->fetch(PDO::FETCH_OBJ);
if($korisnik!=null){
	$_SESSION["logiran"]=$korisnik;
	header("location: test.php");
}else{
	header("location: login.php?neuspio&korisnik=" . $_POST["korisnik"]);
}
?>