<?php

class Customer
{
    public function isSpecialCustomer(
    {
        if ($this->country == "US" && $this->balance < 50)
        {
            return false;
        }

        if ($this->country == "DE" && $this->balance < 25)
        {
            return false;
        }

        if ($this->age < 18 || $this->age > 65) {
            return false;
        }

        if ($this->salary < 5000 && $this->age < 30) {
            return false;
        }

        return true;
    }
}
