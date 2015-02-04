class RotatedArray:

    def __init__(self, rotated_array):
        self.rotated_array = rotated_array

    def count_rotations(self):
        count = 1
        for index, element in enumerate(self.rotated_array):
            if self.rotated_array[index+1] > element:
                count +=1
            else:
                break

        if count == len(self.rotated_array):
            count = 0
        return count

    def n_shifted_bs(self, arr): # O(log n)
      if not arr:
        return False
      left = 0
      arr_len = len(arr)
      right = arr_len - 1
      mid = arr_len / 2
     
      while left <= right:
        if arr[left] < arr[right]:
          return left
        mid = (left + right) / 2
        mid_left = (mid + arr_len - 1) % arr_len
        mid_right = (mid + 1) % arr_len
        if arr[mid_left] > arr[mid] and arr[mid_right] > arr[mid]:
          return mid #found the pivot!
        elif arr[mid] >= arr[left]:
          left = mid + 1
        else:
          right = mid - 1
     
      return False

# class Util:
#     def rotate_left(self, A, m):
#         m %= len(A)
#         # Reverse A[0..m-1]
#         midpoint = m/2
#         endpoint = m-1
#         for i in xrange(midpoint):
#             A[i], A[endpoint-i] = A[endpoint-i], A[i]
#         # Reverse A[m..n-1]
#         midpoint = m+(len(A)-m)/2
#         endpoint = len(A)-1
#         for i in xrange(m, midpoint):
#             A[i], A[endpoint-(i-m)] = A[endpoint-(i-m)], A[i]
#         # Reverses all elements of array in place
#         midpoint = len(A)/2
#         endpoint = len(A)-1
#         for i in xrange(midpoint):
#             A[i], A[endpoint-i] = A[endpoint-i], A[i]

#     def rotate_right(self, A, m):
#         rotate_left(self, A, -m)
