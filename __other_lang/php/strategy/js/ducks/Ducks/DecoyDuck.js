
var DecoyDuck = function() {
	this.display = function() { 
		console.log("Display DecoyDuck!") 
	};

	this.flyBehavior = new FlyNoWay();
	this.soundBehavior = new MuteBehavior();
}

DecoyDuck.prototype = new Duck();