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
	var nearest = 0,
		dist = Math.abs(floor - this.elevatorCollection[0].floor),
		actualDist;

	for (var i = 0 ; i < this.getElevatorAvailable();  i++ ) {
		actualDist = Math.abs(floor - this.elevatorCollection[i].floor)
		if (dist > actualDist) {
			dist = actualDist;
			nearest = i;
		}
	}
	return nearest;
};