describe('ATM', function() {
    var atm;
	beforeEach(function() {
    	atm = new Atm();
	});

    it("atm should receive 10 and return 1x10", function(){
        expect(atm.withdraw(10)).toEqual({'10':1});
    });

    it("atm should receive 20 and return 1x20", function(){
        expect(atm.withdraw(20)).toEqual({'20':1});
    });

    it("atm should receive 50 and return 1x50", function(){
        expect(atm.withdraw(50)).toEqual({'50':1});
    });

    it("atm should receive 100 and return 1x100", function(){
        expect(atm.withdraw(100)).toEqual({'100':1});
    });

    it("atm should receive 30 and return 1x20 and 1x10", function(){
        expect(atm.withdraw(30)).toEqual({'20':1, '10':1});
    });

    it("atm should receive 40 and return 2x20", function(){
        expect(atm.withdraw(40)).toEqual({'20':2});
    });

    it("atm should receive 60 and return 1x50 and 1x10", function(){
        expect(atm.withdraw(60)).toEqual({'50':1,'10':1});
    });

    it("atm should receive 70 and return 1x50 and 1x20", function(){
        expect(atm.withdraw(70)).toEqual({'50':1,'20':1});
    });

    it("atm should receive 80 and return 1x50, 1x20 and 1x10", function(){
        expect(atm.withdraw(80)).toEqual({'50':1,'20':1, '10':1});
    });
    
    it("atm should receive 90 and return 1x50, 2x20", function(){
        expect(atm.withdraw(90)).toEqual({'50':1,'20':2});
    });

    it("atm should receive 180 and return 1x100, 1x50, 1x20, 1x10", function(){
        expect(atm.withdraw(180)).toEqual({'100':1,'50':1,'20':1,'10':1});
    });
});
