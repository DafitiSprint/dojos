using Base.Test

#import MontyHall
include("monty_hall.jl")

#@elapsed monty_sim(10000000)
#@time monty_sim(10000000)

custom_handler(r::Test.Success) = println("Success on $(r.expr)")
custom_handler(r::Test.Failure) = error("Error on custom handler: $(r.expr)")
custom_handler(r::Test.Error) = rethrow(r)

Test.with_handler(custom_handler) do
  no_switch, switch = @time MontyHall.monty_sim(1000000)

  @test_approx_eq_eps no_switch 0.333 0.01
  @test_approx_eq_eps switch 0.667 0.01
end
