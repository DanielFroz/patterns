
var MallardDuck = function() {
	this.display = function() { 
		console.log("Display MallardDuck!"); 
	};

	this.flyBehavior = new FlyWithWings();
	this.soundBehavior = new QuackBehavior();
};
MallardDuck.prototype = new Duck();