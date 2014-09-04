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

  describe("should call nearest elevator", function() {
    describe("to go up", function(){
      it('when Im in third floor', function(){
      	var elevatorManager = new ElevatorManager(2);
      	
        elevatorManager.elevatorCollection[1].setFloor(1);
      	var result = elevatorManager.callElevatorUp(3);

      	expect(result).toEqual(1);
      });

      it('number 0 to go up when Im in third floor ', function(){
      	var elevatorManager = new ElevatorManager(2);

        elevatorManager.elevatorCollection[0].setFloor(2);
        elevatorManager.elevatorCollection[1].setFloor(1);
      	var result = elevatorManager.callElevatorUp(3);

      	expect(result).toEqual(0);
      });

      it('number 1 to go up when nearest are above', function(){
        var elevatorManager = new ElevatorManager(2);

        elevatorManager.elevatorCollection[1].setFloor(4);
        var result = elevatorManager.callElevatorUp(3);

        expect(result).toEqual(1);
      });

      it('number 1 to go up when nearests are equally far', function(){
        var elevatorManager = new ElevatorManager(2);

        elevatorManager.elevatorCollection[0].setFloor(2);
        elevatorManager.elevatorCollection[1].setFloor(4);
        var result = elevatorManager.callElevatorUp(3);

        expect(result).toEqual(0);
      });


      it('', function() {
      });


    })
  });
});