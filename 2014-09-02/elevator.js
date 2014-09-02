var Elevator = function() {
	this.status = "stopped";
	this.floor = 0;
}

Elevator.prototype.getStatus = function() {
	var action = [this.status, this.floor];
	return action;
}

Elevator.prototype.setFloor = function(destination) {
	if (destination > this.floor) {
		for (var i = this.floor; i < destination; i++) {
			this.goUp();
		}   	
	} else {
		for (var i = this.floor; i > destination; i--) {
			this.goDown();
		}
	}
	
	this.status = 'stopped';
}

Elevator.prototype.goUp = function() {
	this.status = 'goingUp';		
	this.floor++;
}

Elevator.prototype.goDown = function() {
	this.status = 'goingDown';		
	this.floor--;
}	