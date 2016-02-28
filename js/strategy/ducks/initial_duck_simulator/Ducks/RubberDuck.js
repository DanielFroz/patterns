
var RubberDuck = function() {
	this.display = function() { 
		console.log("Display RubberDuck!"); 
	}

	this.flyBehavior = new FlyNoWay();
}
RubberDuck.prototype = new Duck();