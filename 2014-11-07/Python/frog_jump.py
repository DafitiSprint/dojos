from math import ceil

class FrogJump:
	def min_jumps(self,x,y,d):
		total_jumps = ceil((y - x) / float(d))
		return total_jumps