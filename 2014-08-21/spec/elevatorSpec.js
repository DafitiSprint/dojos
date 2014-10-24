describe("An Elevator Suite", function() {
  it("Must return an instance of Elevator", function() {
    var elevator = new Elevator();
    expect(elevator).toEqual(jasmine.any(Elevator));
  });

  it("Should be stopped at 0 floor by default", function(){
  	var elevator = new Elevator();
  	expect(elevator.getStatus()).toEqual(['stopped',0]);
  });

  it("Should set floor 1 after 1 second on status change", function() {
    var elevator = new Elevator();
  	spyOn('Elevator', 'goUp');

  	elevator.setFloor(1);
    expect(elevator.goUp).toHaveBeenCalled();
  	expect(elevator.getStatus()).toEqual(['stopped',1]);
  });
});
