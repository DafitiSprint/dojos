module MontyHall

  function example_function(args)
    example_variable = 0
    println("Value of example_variable: $example_variable")
  end

  function simulate(ngames)
    no_switch = 0
    switch = 0
    won, lost = 0, 0 
    for i=1:ngames
      chosen = rand(1: 3)
      prize = rand(1: 3)

      if chosen == prize 
        won += 1
      else
        lost += 1
      end


    end
    avrg_won = won / ngames
    avrg_lost = lost / ngames

    (avrg_won, avrg_lost)
  end

end
