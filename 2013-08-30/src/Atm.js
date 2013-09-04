var Atm = function() {
    this.bills = [100, 50, 20, 10];

    this.withdraw = function(amount) {
        var result = {}, numberOfBills;

        for (i in this.bills) {
            numberOfBills = Math.floor(amount/this.bills[i]);
            if (numberOfBills > 0) {
                result[this.bills[i]] = numberOfBills;
                amount -= this.bills[i]*numberOfBills;
            }
        }
        return result;
    };
};

