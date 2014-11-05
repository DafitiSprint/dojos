class Collatz:
	#memoize = {}
	def chain(self, n):
		res = [n]
		while n != 1:
			#if self.memoize.get(n):
				#return self.memoize[n]		
			if n % 2:
				n = 3*n + 1
			else:
				n = n / 2
			res.append(n)
		#self.memoize[n] = res
		return res

	def len_chain(self, n):
		return len(self.chain(n))

	def find_greatest_chain(self, minimum, maximum):
		return max ([self.len_chain(i) for i in range(minimum, maximum+1)])
