<?php include_once 'konfiguracija.php'; ?>
<!DOCTYPE html>
<?php
$izraz=$veza->prepare("select * from igra");
$izraz->execute();
$red=$izraz->fetchAll();
?>
<html>
	<head>
		<?php include_once 'predlosci/head.php'; ?>
	</head>	
	<body>
		<?php include_once 'predlosci/izbornik.php'; ?>
			<?php
			foreach($red as $r){ ?>
			<p><a href="igra.php?id=<?php echo $r['igra_id']; ?>"><?php echo $r['ime']; ?></a></p>
			<p><?php echo $r['studio']; ?></p>
			<br><br>
			<?php } ?>
		<?php include_once 'predlosci/skripte.php'; ?>
	</body>
</html>