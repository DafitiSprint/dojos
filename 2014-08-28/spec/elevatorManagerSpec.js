describe("An Elevator Manager Suite", function() {
  it('should get all available elevators as Elevator instance', function() {
    var elevatorManager = new ElevatorManager(2);
    expect(elevatorManager.getElevatorAvailable()).toEqual(2);
    expect(elevatorManager.elevatorCollection[0]).toEqual(jasmine.any(Elevator));
  });

});