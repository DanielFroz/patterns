
var RedheadDuck = function() {
	this.display = function() {
		console.log("Display RedheadDuck!"); 
	};	

	this.flyBehavior = new FlyWithWings();
	this.soundBehavior = new QuackBehavior();
};

RedheadDuck.prototype = new Duck();