<?php
include 'ParentClass.php';
include 'ChildClass.php';

$player1 = new ChildClass("wooden sword", 2, 1);
$boss = new ParentClass("Demon", 2000, 2000);

$player1->setName("Matt");
$player1->setHealth(500);
$player1->setMana(100);

$stats = array("Vigor" => "5", "Intelligence" => "3", "Strength" => "4");

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>

	<div id="player">
		<?php echo $player1; ?>
	</div>

	<div id="boss">
		<?php echo $boss; ?>
	</div>

	<section id="turn1">
		<h3>Turn 1 </h3>
		<p>Player 1 hits Demon for 55 damage!</p>
		<p>Demon claws Player 1 for 120 damage!</p>
		<?php $player1->setHealth(380); $boss->setHealth(1945); ?>
		<p> Player 1: Health = <?php echo $player1->getHealth(); ?> Mana = <?php echo $player1->getMana() ?>
			<p> Demon: Health = <?php echo $boss->getHealth(); ?> Mana = <?php echo $boss->getMana() ?>
	</section>

	<section id="turn2">
		<h3>Turn 2 </h3>
		<p>Player 1 activates holy sword for 100 mana!</p>
		<p>Player 1 purges demon for 700 damage!</p>
		<p>Demon uses flamethrower! for 50 mana!</P>
		<p>Demon burns Player 1 for 500 damage!</p>
		<p> Player 1 has fainted! </p>
		<?php $player1->setHealth(0); $boss->setHealth(1245); $player1->setMana(0); $boss->setMana(1950); ?>
		<p> Player 1: Health = <?php echo $player1->getHealth(); ?> Mana = <?php echo $player1->getMana() ?>
			<p> Demon: Health = <?php echo $boss->getHealth(); ?> Mana = <?php echo $boss->getMana() ?>
	</section>

	<h3> Demon is Victorious </h3>


</body>
</html>
