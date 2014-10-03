/* runner.c */

#include "tests.h"

int all_tests() {
	_verify(test_1_to_roman);
	_verify(test_2_to_roman);
	_verify(test_3_to_roman);
	_verify(test_4_to_roman);
	_verify(test_5_to_roman);	
	return 0;
}

int main(int argc, char **argv) {
	int result = all_tests();
	if (result == 0)
		printf("PASSED\n");
	//printf("Tests run: %d\n", tests_run);

	return result != 0;
}