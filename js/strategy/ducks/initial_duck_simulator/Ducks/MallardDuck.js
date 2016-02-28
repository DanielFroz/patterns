
var MallardDuck = function() {
	this.display = function() { 
		console.log("Display MallardDuck!"); 
	};

	this.flyBehavior = new FlyWithWings();
};
MallardDuck.prototype = new Duck();