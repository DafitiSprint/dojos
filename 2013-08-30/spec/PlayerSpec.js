describe("Player", function() {
	var player;

	beforeEach(function() {
    	player = new Player();
	});

	it("should be able to play a Song", function() {
	    player.play();

	    expect(player.teste).toEqual(true);

        //expect(player.teste).toBe(true);

        //expect(player.teste).not.toBe(true);


        //regular expression
        //expect(player.teste).toMatch(/bar/);


        //expect(player.teste).toBeDefined();

        //for more spects
        //http://pivotal.github.io/jasmine/
	});
});
