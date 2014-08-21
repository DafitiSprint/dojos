function Elevator() {
	var status = "stopped";
	var floor = 0;

	this.getStatus = function() {
		var action = [status, floor];
		return action;
	}

	this.setFloor = function(destination) {
		floor = destination;
		goUp();
		status = 'stopped';
	}

	this.goUp = function(){
		status = 'goingUp';		
		setTimeout(function(that){
			this.floor++;
		}, 1000);
	}
}