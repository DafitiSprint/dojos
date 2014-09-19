#!/usr/bin/python

from __future__ import division
import sys
import timeit
from random import randint

def monty_sim(ngames): 

  #Number of games and game generation
  prize = [randint(1,3)*x for x in ngames*[1]]
  player = [randint(1,3)*x for x in ngames*[1]]

  # Evaluating success
  no_switch = 0
  switch = 0

  for game in range(ngames):
    # Keeping decision
    if prize[game] == player[game]:
      no_switch = no_switch + 1
      # Taking chance with Monty
      #if prize[game] == player[game]:
        # Switching means losing
      #  pass
      # Switching means winning
    else:
      switch = switch + 1
  print 'Probability of winning (own door)', no_switch/ngames
  print 'Probability of winning (switching doors)', switch/ngames
  return

def monty_sim2(ngames):
  no_switch = 0
  switch = 0
  for game in xrange(ngames):
    player = randint(1,3)
    prize = randint(1,3)
    # Keep decision
    if player == prize:
      no_switch += 1
    else: 
      switch += 1
  print 'Probability of winning (own door)', no_switch/ngames
  print 'Probability of winning (switching doors)', switch/ngames

  return

if __name__ == '__main__':
  try:
    t = timeit.Timer(setup='from __main__ import monty_sim2', stmt='monty_sim2(int(sys.argv[1]))')
    print t.timeit(1)
  except:
    print sys.exc_info()
    print 'Usage: python file_name.py <simulate game n times>'
