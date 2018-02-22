<?php
include_once 'konfiguracija.php';
if(isset($_GET['id'])) {
    $iid = $_GET['id'];
}
$kid = $_SESSION["logiran"]->korisnik_id;

$izraz=$veza->prepare("insert into komentar(tekst, korisnik_id, igra_id) values (:tekst, :korisnik_id, :igra_id)");
$izraz->execute(array(
	"tekst"=>$_POST["tekst"],
	"korisnik_id"=>$kid,
	"igra_id"=>$iid
));

header('location: igre.php');
