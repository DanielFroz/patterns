
var ModelDuck = function() {
	this.display = function() { 
		console.log("Display ModelDuck!"); 
	};

	this.flyBehavior = new FlyNoWay();
	this.soundBehavior = new QuackBehavior();
};

ModelDuck.prototype = new Duck();