
var FlyWithWings = function() { 
	this.fly = function() { 
		console.log("I am fly with wings!!!");
	}
};

FlyWithWings.prototype = new FlyBehavior();