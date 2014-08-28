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

