class Exchange
    def calculate (price, money)
        exchange = money - price
        result = []
        if (exchange < 5)
            for i in 1..exchange
                result << 1
            end
        end
        if (exchange > 5)
            result << 5
            result << 1
        end
        if (exchange == 5)
            result << 5
        end
        return result
    end
end
