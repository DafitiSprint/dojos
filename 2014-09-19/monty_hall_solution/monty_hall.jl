module MontyHall

#export monty_sim

function monty_sim(ngames)
  no_switch = 0
  switch = 0
  for game in 1:ngames
    player = rand(1:3)
    prize = rand(1:3)
    if player == prize
      no_switch += 1
    else
      switch += 1
    end
  end
  println("Probability of winning (own door): $(no_switch/ngames)")
  println("Probability of winning (switching door): $(switch/ngames)")
  (no_switch/ngames, switch/ngames)
end

end

# Just experimenting with Julia's type
#type Point
#  x::Int64
#  y::Int64
#  Point(x, y) = new(x, y)
#end
# Due to Julia's multiple dispatch
#multiply_x_y(p::Point) = p.x * p.y

#p = Point(2, 4)
#multiply_x_y(p)
