<?php $img = "img/{$alt}.png"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MBoutique</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<header>
			<nav>
				<ul>
					<li><a href="./">Welcome</a></li>
					<li><a href="macarons.php">Our Macarons</a></li>
					<li><a href="gifts.php">Gifts & Parties</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<img src="img/dropdown.png" alt="" class="dropdown">
				<ul class="responsive-menu" style="display: none;">
					<a href="index.php"><li>Welcome</li></a>
					<a href="macarons.php"><li>Our Macaroons</li></a>
					<a href="gifts.php"><li>Gifts & Parties</li></a>
					<a href="contact.php"><li>Contact</li></a>
				</ul>
			</nav>
			<img src="<?php echo $img ?>" alt="<?php echo $alt ?>" class="cover-image">
		</header>