<?php 

interface Subject {
	function registerObserver(Observer $o);
	function removeObserver(Observer $o);
	function notifyObservers();
}

class ConcreteSubject implements Subject {
	function registerObserver(Observer $o) {
		
	}
	function removeObserver(Observer $o) {
		
	}
	function notifyObservers() {
		
	}
}





interface Observer {
	function update();
}

class ConcreteObserver implements Observer {
	function update() {
		
	}
}

?>