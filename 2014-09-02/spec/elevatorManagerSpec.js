describe("An Elevator Manager Suite", function() {
  it('should get all available elevators as Elevator instance', function() {
    var elevatorManager = new ElevatorManager(2);
    expect(elevatorManager.getElevatorAvailable()).toEqual(2);
    expect(elevatorManager.elevatorCollection[0]).toEqual(jasmine.any(Elevator));
  });

  it('should call elevator to go up when in third floor', function(){
  	var elevatorManager = new ElevatorManager(1);
  	var result = elevatorManager.callElevatorUp(3);

  	expect(result).toEqual(0);
  });

  it('should call nearest elevator to go up when Im in third floor', function(){
  	var elevatorManager = new ElevatorManager(2);
  	var elevator1 = new Elevator;
  	var elevator2 = new Elevator;

  	elevator2.setFloor(1);

  	elevatorManager.elevatorCollection = [elevator1, elevator2];
  	var result = elevatorManager.callElevatorUp(3);

  	expect(result).toEqual(1);
  });

  it('should call nearest elevator to go up when Im in third floor', function(){
  	var elevatorManager = new ElevatorManager(2);
  	var elevator1 = new Elevator;
  	var elevator2 = new Elevator;
  	elevator1.setFloor(4);
  	elevator2.setFloor(1);

  	elevatorManager.elevatorCollection = [elevator1, elevator2];
  	var result = elevatorManager.callElevatorUp(3);

  	expect(result).toEqual(0);
  });

});