<?php

class Detetive {

	private $list = array();
	private $counter = [];
	public function __construct($list = array())
	{
		$this->list = $list;
	}
	
	public function search()
	{
		if (!count($this->list)) {
			return null;
		}

		if (count($this->list) == 1) {
			return $this->list[0];
		}

		foreach ($this->list as $item)
		{
			if (!isset($this->counter[$item])) {
				$this->counter[$item] = 1;
			} else {
				$this->counter[$item]++;
			}
		}


		$lowest = null;
		
		foreach($this->counter as $key => $value) {
			if ($lowest < $value) {
				$lowest = $key;
			}

			
		}

		return $lowest;
	}


}
