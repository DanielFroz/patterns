
var Duck = function() {
	this.display = function() { 

	};

	this.swim = function() { 
		console.log("I am swim like duck!"); 
	};

	this.fly = function() { 
		this.flyBehavior.fly(); 
	};
};