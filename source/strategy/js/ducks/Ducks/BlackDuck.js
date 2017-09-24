
var BlackDuck = function() {
	this.display = function() { 
		console.log("Display BlackDuck!"); 
	};

	this.flyBehavior = new FlyWithWings();
	this.soundBehavior = new QuackBehavior();
};

BlackDuck.prototype = new Duck();