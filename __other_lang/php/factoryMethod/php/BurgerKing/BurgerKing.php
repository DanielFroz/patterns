<?php

require_once("Creator.php");
require_once("Vopper.php");

class BurgerKing extends Creator {
	public function createProduct($type) {
		if($type == 'Vopper') {
			return new Vopper();
		}
		return null;
	}
}

?>