<?php

class Detetive
{
    /**
     * @var array
     */
    private $list = [];

    /**
     * @var array
     */
    private $counter = [];

    /**
     * @var array
     */
    private $lowest = [];

    /**
     * @param array $list
     */
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    /**
     * @return mixed|null
     */
    public function search()
    {
        if (empty($this->list)) {

            return null;
        }

        if (count($this->list) == 1) {

            return reset($this->list);
        }

        $this->defineFrequencyCounter();
        $this->defineLowest();

        if ($this->hasAnotherLowest()) {
            return null;
        };

        return $this->lowest["item"];
    }

    private function defineFrequencyCounter()
    {
        foreach ($this->list as $item) {
            if (!array_key_exists($item, $this->counter)) {
                $this->counter[$item] = 1;

                continue;
            }

            $this->counter[$item]++;
        }
    }

    /**
     * @return array
     */
    private function extractFirstItemFromFrequencyCounter()
    {
        $lowest = [];
        $lowest["item"] = key($this->counter);
        $lowest["count"] = $this->counter[$lowest["item"]];

        return $lowest;
    }

    private function defineLowest()
    {
        $lowest = $this->extractFirstItemFromFrequencyCounter();

        foreach ($this->counter as $key => $value) {
            if ($lowest["item"] == $key) {

                continue;
            }

            if ($lowest["count"] > $value) {
                $lowest["count"] = $value;
                $lowest["item"] = $key;
            }
        }

        $this->lowest = $lowest;
    }

    /**
     * @return bool
     */
    private function hasAnotherLowest()
    {
        $matches = array_keys($this->counter, $this->lowest["count"]);

        return (count($matches) > 1);
    }
}
