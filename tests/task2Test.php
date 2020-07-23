<?php

	namespace TDD\Test;

	use PHPUnit\Framework\TestCase;
	use TDD\task2;

	/*
	 * @covers TDD\test2
	 */
	class task2Test extends TestCase
	{
		
		public function setUp():void {
        	$this->task2 = new task2();
      	}

      	public function tearDown():void {
        	unset($this->task2); 
      	}

      	public function testItemsArray() {
           
          $output = $this->task2->addieren(5, 7, 10, 13, 2); 
          $this->assertEquals( // Built-in assertEquals() method for defining the test. 
                  37, // 1st param is expected value
                  $output, // 2nd param is the $output variable
                  'When summing the total should equal 37' // 3rd param is a message displayed in case of failure
                  );
      	}

	}

?>