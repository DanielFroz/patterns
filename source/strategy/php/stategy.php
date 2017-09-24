<?php 

// DUCKS ************************************************************************************
	class Duck {
		public function performFly($flyBehavior) {
			$flyBehavior->fly();
		}
	}
	
// ********************************************************************************
	interface FlyBehavior {
		public function fly();
	}
	
	class FlyWithWings implements FlyBehavior {
		public function fly() {
			echo 'I am fly with wings';
		}
	}
	
	class FlyRocket implements FlyBehavior {
		public function fly() {
			echo 'I am Rocket man';
		}
	}
	
// MAIN ***************************************************************************	
	$md1 = new Duck();
	$fb1 = new FlyWithWings();
	$md1->performFly($fb1);
	
?>