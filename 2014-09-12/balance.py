class Balance:
	def __init__(self, arr = []):
		self.arr = arr

	def point(self):
		found_index = []
		for index in range(len(self.arr)):
			leftSum = sum(self.arr[:index])
			rightSum = sum(self.arr[index+1:])
			if leftSum == rightSum:
				found_index.append(index)

		if len(found_index) == 0:
			found_index.append(-1)
		
		return found_index


	def point2n(self):
		total = sum(self.arr)
		leftSum = 0
		found_index = []


		for index, item in enumerate(self.arr):
			leftSum += item;

			if (leftSum == (total - item) / 2):
				found_index.append(index);

		return [-1];
