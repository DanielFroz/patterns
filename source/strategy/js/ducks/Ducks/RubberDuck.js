
var RubberDuck = function() {
	this.display = function() { 
		console.log("Display RubberDuck!"); 
	}

	this.flyBehavior = new FlyNoWay();
	this.soundBehavior = new SquickBehavior();
}
RubberDuck.prototype = new Duck();