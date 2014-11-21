class RotatedArray:

    def __init__(self, rotated_array):
        self.rotated_array = rotated_array

    def count_rotations(self):
        return []

class Util:
    def rotate_left(self, A, m):
        m %= len(A)
        # Reverse A[0..m-1]
        midpoint = m/2
        endpoint = m-1
        for i in xrange(midpoint):
            A[i], A[endpoint-i] = A[endpoint-i], A[i]
        # Reverse A[m..n-1]
        midpoint = m+(len(A)-m)/2
        endpoint = len(A)-1
        for i in xrange(m, midpoint):
            A[i], A[endpoint-(i-m)] = A[endpoint-(i-m)], A[i]
        # Reverses all elements of array in place
        midpoint = len(A)/2
        endpoint = len(A)-1
        for i in xrange(midpoint):
            A[i], A[endpoint-i] = A[endpoint-i], A[i]

    def rotate_right(self, A, m):
        rotate_left(self, A, -m)
