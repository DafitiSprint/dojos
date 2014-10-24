using Base.Test

include("monty_hall.jl")

custom_handler(r::Test.Success) = println("Success on $(r.expr)")
custom_handler(r::Test.Failure) = println("Error on custom handler: $(r.expr)")
custom_handler(r::Test.Error) = rethrow(r)

Test.with_handler(custom_handler) do

  # Simple assertion
  @test 1 == 1

  # Assertion with an epsilon tolerance
  @test_approx_eq_eps 1.99 2.0 0.1

  # Using @time macro to see how long a function takes
  @time println("This takes almost no time at all")

  no_switch, switch = MontyHall.simulate(2, 1)
  @test no_switch == 0.5
  @test switch == 0.5 

  #@test_approx_eq_eps no_switch 0.33 0.01
  #@test_approx_eq_eps switch 0.67 0.01
end
