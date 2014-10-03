/* sut.c */

#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "sut.h"

char* table(int x) {
	char* res; 
	switch (x) {
		case 5: 
			res = "V";
			break;
	    default:
	        res = "I";

	}
	return res;
}

char* to_roman(int x) {
    char* result;
    result = malloc(100000);
    
    if (x <= 3) {
    	int i;
    	for (i = 0; i < x; i++) {
    		strcat(result, "I");	
    	}
    } else { 
    	int remainder = 5 % x;
    	x += remainder;
    	strcat(result, to_roman(remainder));
    	strcat(result, table(x));
    }
    /* printf("%d => %s\n", x, result); */
    return result;
}

long square(int x) {
	return (long)x*(long)x;
}

int main(int argc, char **argv) {
	int val;
	if(argc != 2) {
		(void) printf("Usage: %s value\n", argv[0]);
		return -1;
	}
	val = atoi(argv[1]);
	(void) printf("%d in roman is %s\n", val, to_roman(val));
	return 0;
}
