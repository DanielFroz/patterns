<?php 

require_once("BurgerKing.php");

$burgerKing = new BurgerKing();
$vopper = $burgerKing->createProduct('Vopper');
$vopper->say();

?>