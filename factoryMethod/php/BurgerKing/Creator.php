<?php 

class Creator {
	public $product;
	
	public function createProduct($type) {}
	
	public function factoryMethod($type) {
		$product = createProduct($type);
		return $product;
	}
}

?>