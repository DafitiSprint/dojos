describe("An Elevator Suite", function() {
  it("Must return an instance of Elevator", function() {
    var elevator = new Elevator();
    expect(elevator).toEqual(jasmine.any(Elevator));
  });

  it("Should be stopped at 0 floor by default", function(){
  	var elevator = new Elevator();
  	expect(elevator.getStatus()).toEqual(['stopped',0]);
  });

  it("should call goUp when setFloor to 1", function() {
    var elevator = new Elevator();
  	spyOn(elevator, 'goUp');

  	elevator.setFloor(1);
    expect(elevator.goUp.calls.count()).toEqual(1);
  });
  
  it("should call goUp twice, when setFloor to 2", function() {
    var elevator = new Elevator();
  	spyOn(elevator, 'goUp');

  	elevator.setFloor(2);
    expect(elevator.goUp.calls.count()).toEqual(2);
  });

  it('should set floor to one when call goUp once', function() {
    var elevator = new Elevator();
    elevator.goUp();
    expect(elevator.getStatus()).toEqual(['goingUp', 1]);
  });
});
