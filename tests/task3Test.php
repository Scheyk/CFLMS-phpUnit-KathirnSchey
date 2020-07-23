<?php

namespace TDD\Test;

use PHPUnit\Framework\TestCase;
use TDD\task3;

/*
* @covers TDD\task3
*/


class task3Test extends TestCase {

	public function setUp():void {
		$this->task3 = new task3();
	}

	public function tearDown():void {
		unset($this->task3);
	}
	
	public function testTotal() {
		
		$input = [1,5,8,7,6];
		$output = $this->task3->total($input);

		$this->assertEquals(
				27,
				$output,
				'when summing correct than 27'
				);
	}

	public function testDurch() {
		$inputArray = 25;
		$inputDiv = 2;
		$output = $this->task3->durch($inputArray, $inputDiv);

		$this->assertEquals(
				12.5,
				$output,
				'when correct, than 12.5'
				);
	}
	
}

?>

