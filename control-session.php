<?php
session_start(); // ici on continue la session
if ((!isset($_SESSION['id'])) || ($_SESSION['id'] == ''))
{
	// La variable $_SESSION['login'] n'existe pas, ou bien elle est vide
	// <=> la personne ne s'est PAS connectée
	echo '<p>Vous devez vous <a href="../connexion.php">connecter</a>.</p>'."\n";
	exit();
}
?>