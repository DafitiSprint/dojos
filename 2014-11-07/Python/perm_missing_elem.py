class PermMissingElem():
	def find2(self, arr):
		arr = sorted(arr)
		for i, item in enumerate(arr):
			if item != i + 1:
				return i + 1

	def find(self,arr):
		return sum(range(len(arr)+2)) - sum(arr)