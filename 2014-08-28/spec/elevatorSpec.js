describe("An Elevator Suite", function() {
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

  it("should be at floor 5, when setFloor to 5", function() {
    var elevator = new Elevator();

    elevator.setFloor(5);
    expect(elevator.getStatus()).toEqual(['stopped',5]);
  })

  it("should be at floor 5, when setFloor to 2 and then 5", function() {
    var elevator = new Elevator();

    elevator.setFloor(2);
    elevator.setFloor(5);

    expect(elevator.getStatus()).toEqual(['stopped',5]);
  })

  it('should set floor to one when call goUp once', function() {
    var elevator = new Elevator();
    elevator.goUp();
    expect(elevator.getStatus()).toEqual(['goingUp', 1]);
  });

  it("should call goDown once, when setFloor to 1", function() {
    var elevator = new Elevator();
    spyOn(elevator, 'goDown');

    elevator.setFloor(2);
    elevator.setFloor(1);
    expect(elevator.goDown.calls.count()).toEqual(1);
  });
  it('should set floor to zero when call goDown once', function() {
    var elevator = new Elevator();
    elevator.goUp();
    elevator.goDown();
    expect(elevator.getStatus()).toEqual(['goingDown', 0]);
  });
});