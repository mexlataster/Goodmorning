<?php
	$a= date("G:i");
?>
	<?php 
		if ($a < 12){
			$b = "Goedemorgen";
		} elseif ($a > 21) {
			$b = "Goedenacht";
		} elseif ($a > 17) {
			$b = "Goedenavond";		
		} else 
			$b = "Goedemiddag";
	?>

	<?php 
	if ($a < 12) {
		$bg = "bg/morning.png";
	} elseif($a > 21) {
		$bg = "bg/night.png";
	} elseif($a > 17) {
		$bg = "bg/evening.png";		
	} else 	
		$bg = "bg/afternoon.png";

	?>

	<style>
  body { background-image: url('<?php echo $bg ?>'); }
	</style>


<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $b ?></title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<meta charset="utf-8">
	</head>
<body>
	<div>
 	<h1><?php echo $b ?></h1>
	<h1>Het is nu: <?php echo $a ?></h1>
	</div>
</body>
</html>