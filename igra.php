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
		<?php include_once 'predlosci/skripte.php'; ?>
	</body>
</html>
