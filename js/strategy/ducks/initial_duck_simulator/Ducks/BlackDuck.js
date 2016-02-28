
var BlackDuck = function() {
	this.display = function() { 
		console.log("Display BlackDuck!"); 
	};

	this.flyBehavior = new FlyWithWings();
};

BlackDuck.prototype = new Duck();