var FizzBuzz = function(listSize) {
    this.getList = function() {
        var finalList = [];
        for (i=1; i<=listSize; i++) {        
            finalList.push(this.convert(i));
        }
        return finalList;
    }

    this.convert = function(number) {
        var convertedNumber = '';

        if (number % 5 !== 0 && number % 3 !== 0) {
            return number;
        }
       
        if (number % 3 === 0) {
            convertedNumber  = 'fizz';
        }

        if (number % 5 === 0) {
            convertedNumber  += 'buzz';
        }


        return convertedNumber;
    }
};


