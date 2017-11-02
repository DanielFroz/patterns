<?php 

abstract class Subject {
	public abstract function registerObserver(Observer $o);
	public abstract function removeObserver(Observer $o);
	public abstract function notifyObservers();
}

class ConcreteSubject extends Subject {
	
	public $observers;
	
	public function registerObserver(Observer $o) {
		
	}
	public function removeObserver(Observer $o) {
		
	}
	public function notifyObservers() {
		
	}
}


interface Observer {
	public function update();
}

class ConcreteObserver implements Observer {
	public function update() {
		
	}
}

?>