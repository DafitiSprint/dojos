describe("A FizzBuzz suite", function() {

     it("should return 1, 2,fizz, 4 and buzz, when '5' given", function(){
        var fizzbuzz = new FizzBuzz(5);
        expect(fizzbuzz.getList()).toEqual([1,2,'fizz',4, 'buzz']);
      });


      describe("should convert", function() {
        var fizzbuzz = new FizzBuzz(1);

        it("3 to 'fizz'" , function(){
            expect(fizzbuzz.convert(3)).toBe('fizz'); 
        });

        it("6 to 'fizz'", function() {
            expect(fizzbuzz.convert(6)).toBe('fizz');
        });

        it("5 to 'buzz'", function() {
            expect(fizzbuzz.convert(5)).toBe('buzz');
        });

        it("15 to 'fizzbuzz'", function() {
            expect(fizzbuzz.convert(15)).toBe('fizzbuzz');
        });
      });    
});
