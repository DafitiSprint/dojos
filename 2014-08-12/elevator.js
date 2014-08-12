function Elevator() {
	var status = "stopped";
	var floor = 0;

	this.getStatus = function() {
		var action = [status, floor];
		return action;
	}

	this.setFloor = function(destination) {

	}

	this.goUp = function(){
		this.floor++;
		setTimeout(function(that){
			that.floor
		}, 1000);
	}
}