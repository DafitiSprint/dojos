/* tests.c */

#include <stdio.h>
#include <stdlib.h>
#include "sut.h"
#include "tests.h"

int tests_run = 0;

int test_square() {
	int x=5;
	_assert(square(x) == 25);
	return 0;
}

int test_square_fail() {
	int x=6;
	_assert(square(x) != 36);
	return 0;
}

int test_1_to_roman() {
	int x = 1; 
	_assert(strcmp(to_roman(x),"I") == 0);
	return 0;
}

int test_2_to_roman() {
	int x = 2; 
	_assert(strcmp(to_roman(x),"II") == 0);
	return 0;
}

int test_3_to_roman() {
	int x = 3; 
	_assert(strcmp(to_roman(x),"III") == 0);
	return 0;
}

int test_4_to_roman() {
	int x = 4; 
	_assert(strcmp(to_roman(x),"IV") == 0);
	return 0;
}

int test_5_to_roman() {
	int x = 5; 
	_assert(strcmp(to_roman(x),"V") == 0);
	return 0;
}