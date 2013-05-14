<?php
require_once('Object/Hello.php');

class StackTest extends PHPUnit_Framework_TestCase
{

  public function testSayHello()
  {
    //Arrange -- set up a unit to test
    $unit = new Hello();
    //Act -- do something interesting
    $result = $unit->sayHello('mama');
    //Assert -- make an assertion about what should happen
    $this->assertEquals('Hello, mama!', $result);
  }

  public function testSayHelloWithNullName()
  {
    //Arrange -- set up a unit to test
    $unit = new Hello();
    //Act -- do something interesting
    $result = $unit->sayHello(null);
    //Assert -- make an assertion about what should happen
    $this->assertEquals('Hello... stranger.', $result);
  }
}

?>
