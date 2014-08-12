describe("An Elevator Suite", function() {
  it("Must return an instance of Elevator", function() {
    var elevator = new Elevator();
    expect(elevator).toEqual(jasmine.any(Elevator));
  });

  it("Should be stopped at 0 floor by default", function(){
  	var elevator = new Elevator();
  	expect(elevator.getStatus()).toEqual(['stopped',0]);
  });
  it(" should set floor 1", function() {
  	var elevator = new Elevator();
  	elevator.setFloor(1);
  	expect(elevator.getStatus()).toEqual(['goingUp',0]);
  });
});
