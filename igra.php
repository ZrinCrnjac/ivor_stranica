<?php include_once 'konfiguracija.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} 
$izraz=$veza->prepare("select * from igra where igra_id= :id");
$izraz->execute(array('id'=>$id));
$red=$izraz->fetchAll();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'predlosci/head.php'; ?>
	</head>
	<body>
		<?php include_once 'predlosci/izbornik.php'; ?>
		<?php foreach($red as $r){ ?>
			<p><?php echo $r['ime']; ?></p>
			<p><?php echo $r['studio']; ?></p>
		<?php } ?>
		<?php
		$izrazz=$veza->prepare("SELECT a.username, b.tekst
								from korisnik a 
								inner join komentar b on a.korisnik_id=b.korisnik_id
								inner join igra c on b.igra_id=c.igra_id where c.igra_id=:id order by b.komentar_id desc");
		$izrazz->execute(array('id'=>$id));
		$row=$izrazz->fetchAll();
		foreach($row as $a) {
		?>
		<p>Korisnik: <?php echo $a['username']; ?></p>
		<p>Komentar: <?php echo $a['tekst']; ?></p>
		<?php } ?>
		<form method="post" action="action_komentar.php?id=<?php echo $id; ?>">
			<input type="text" name="tekst" id="tekst">
			<input type="submit" value="Potvrdi">
		</form>
		<?php include_once 'predlosci/skripte.php'; ?>
	</body>
</html>
