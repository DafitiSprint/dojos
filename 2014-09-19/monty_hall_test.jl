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
end
