
var RedheadDuck = function() {
	this.display = function() {
		console.log("Display RedheadDuck!"); 
	};	

	this.flyBehavior = new FlyWithWings();
};

RedheadDuck.prototype = new Duck();