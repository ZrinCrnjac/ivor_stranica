<?php include_once 'konfiguracija.php'; ?>
<!DOCTYPE html>
<?php
$izraz=$veza->prepare("select * from igra");
$izraz->execute();
$red=$izraz->fetchAll();
?>
<html>
	<?php
	foreach($red as $r){ ?>
	<p><?php echo $r['ime']; ?></p>
	<p><?php echo $r['studio']; ?></p>
	<br><br>
	<?php } ?>
</html>