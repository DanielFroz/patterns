<?php

require_once('Square.php');
require_once('Rectangle.php');
require_once('Circle.php');

class Client {
	public function drawPicture() {
		$square = new Square();
		$rectangle = new Rectangle();
		$circle = new Circle();
		
		$square->draw();
		$rectangle->draw();
		$circle->draw();
	}
}

?>