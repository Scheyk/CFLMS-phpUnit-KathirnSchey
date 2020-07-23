<?php

namespace TDD;

class task3 {

	public function total(array $items = []) {
		return array_sum($items);
	}

	public function durch($array, $int) {
		return ($array / $int);
	}
}