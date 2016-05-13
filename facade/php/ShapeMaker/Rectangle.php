<?php

require_once('Shape.php');

class Rectangle implements Shape {
	public function draw() {
		echo 'Rectangle -> draw() <br/>';
	}
}

?>