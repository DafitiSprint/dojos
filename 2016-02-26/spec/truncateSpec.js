describe("A truncate suite", function() {
    it("should return A... when args is equal zero", function() {
        var truncated = truncate('A', 0);
        expect(truncated).toBe('A...');
    });

    it("should return A... when string is A-", function() {
        var truncated = truncate('A-', 1);
        expect(truncated).toBe('A...');
    });

    it("should return Ab... when string is Absolutely Longer", function() {
        var truncated = truncate("Absolutely Longer", 2)
        expect(truncated).toBe('Ab...');
    });

    it("should return A-tisket... when string is A-tisket a-tasket A green and yellow basket and result must have 11 characters", function() {
        var truncated = truncate("A-tisket a-tasket A green and yellow basket", 11)
        expect(truncated).toBe('A-tisket...');
    });
});

