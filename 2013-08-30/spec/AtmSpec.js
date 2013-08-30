describe('ATM', function() {
    var atm;
	beforeEach(function() {
    	atm = new Atm();
	});

    it("atm should receive 10 and return 1x10", function(){
        expect(atm.withdraw(10)).toEqual({'10':1});
    });

    it("atm should receive 20 and return 20", function(){
        expect(atm.withdraw(20)).toEqual({'20':1});
    });
});
