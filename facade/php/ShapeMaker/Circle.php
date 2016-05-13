<?php

require_once('Shape.php');

class Circle implements Shape {
	public function draw() {
		echo 'Circle -> draw() <br/>';
	}
}

?>