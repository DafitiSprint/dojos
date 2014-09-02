var ElevatorManager = function(elevatorCount) {
	this.elevatorCount = elevatorCount;
	this.elevatorCollection = new Array();

	for (var i = 0; i < elevatorCount; i++) {
		this.elevatorCollection[i] = new Elevator();
	};
}

ElevatorManager.prototype.getElevatorAvailable = function() {
	return this.elevatorCount;
}

ElevatorManager.prototype.callElevatorUp = function(floor) {
	var nearest = "";
	for (var i = 0 ; i < this.getElevatorAvailable();  i++ ) {
		if (this.elevatorCollection[i].floor <= floor) {
			nearest = i;
		}
	}
	return nearest;
};