function Elevator() {
	var status = "stopped";
	var floor = 0;

	this.getStatus = function() {
		var action = [status, floor];
		return action;
	}

	this.setFloor = function(destination) {
		for (var i = floor; i < destination; i++) {
			this.goUp();
		}            
		status = 'stopped';
	}

	this.goUp = function() {
		status = 'goingUp';		
		floor++;
	}
}
