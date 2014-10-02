describe('A random words generation suite', function() {
    it('should test if has one letter', function() {
        var randomWords = new RandomWords();
        expect(randomWords.generate(1).length).toBe(1);
    });
    
    it('should test if has two letters', function() {
        var randomWords = new RandomWords();
        expect(randomWords.generate(2).length).toBe(2);
    });
    
    it('should test if has letters', function() {
        var randomWords = new RandomWords();
        expect(randomWords.generate(4)).toMatch(/[a-z]{4}/);
    });

});
