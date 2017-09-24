
var FlyNoWay = function() { 
	this.fly = function() { 
		console.log("I can't fly ((");
	}
};

FlyWithWings.prototype = new FlyBehavior();