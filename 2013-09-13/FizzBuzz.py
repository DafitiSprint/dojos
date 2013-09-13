#!/usr/bin/env python

class FizzBuzz():

    def run(self, number=0):
        result = number
        if number % 15 == 0:
            result = "fizzbuzz"
        elif number % 3 == 0:
            result = "fizz"
        elif number % 5 == 0:
            result = "buzz"
        return result
