
var DecoyDuck = function() {
	this.display = function() { 
		console.log("Display DecoyDuck!") 
	};

	this.flyBehavior = new FlyNoWay();
}

DecoyDuck.prototype = new Duck();