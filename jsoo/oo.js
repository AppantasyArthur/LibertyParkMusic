var Person = function(pars){
	
	var name = pars.name;
	var age = pars.age;
	
	this.getName = function(){
		Output.printout(name);
		return name;
	};
	
	this.getAge = function(){
		Output.printout(age);
		return age;
	};
	
};

Person.prototype.height = 180; // public
Person.prototype.getHeight = function(){
	Output.printout('2 : ' + this.height);
	return '3 : ' + this.height;
};

