<?php
namespace TDD\Test;
   
  use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
  use TDD\challenge; // imports challenge class
  /*
   * @covers TDD\challenge
   */
  class challengeTest extends TestCase {

      public function setUp():void {
          $this->challenge = new challenge();
        }

      public function tearDown():void {
          unset($this->challenge); 
        }

      public function testTheFunction() {
        $output = $this->challenge->delete(3);

          $this->assertEquals(
          "success",
          $output,
          "error"
          );

      } 

}