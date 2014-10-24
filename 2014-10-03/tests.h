#define FAIL() printf("\nfailure in %s() line %d\n", __func__, __LINE__)
#define _assert(test) do { if (!(test)) { FAIL(); return 1; } } while(0)
//#define _verify(test) do { int r=test(); tests_run++; if(r) return r; } while(0)
#define _verify(test) do { int r=test(); if(r) return r; } while(0)
#define _verify_all()


int test_square();
int test_square_fail();
int test_1_to_roman();
int test_2_to_roman();
int test_3_to_roman();
int test_4_to_roman();
int test_5_to_roman();
