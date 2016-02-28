
var FlyRocketPower = function() { 
	this.fly = function() { 
		console.log("I am fly with Rocket Power!!!");
	}
};

FlyRocketPower.prototype = new FlyBehavior();