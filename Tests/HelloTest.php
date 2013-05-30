<?php
require_once('Object/Hello.php');
require_once('Object/Localizer.php');


class StackTest extends PHPUnit_Framework_TestCase
{
  
  private $unit;

  public function setUp() {
    //Arrange -- set up a unit to test
    $this->unit = new Hello();
    $stub = $this->getMock('Localizer');
    $stub->expects($this->any())->method('getGreeting')->will($this->returnValue('Hiya'));

    $this->unit->setLocalizer($stub);
  }

  public function testSayHello()
  {
    //Act -- do something interesting
    $result = $this->unit->sayHello('mama');
    //Assert -- make an assertion about what should happen
    $this->assertEquals('Hiya, mama!', $result);
  }

  public function testSayHelloWithNullName()
  {
    //Act -- do something interesting
    $result = $this->unit->sayHello(null);
    //Assert -- make an assertion about what should happen
    $this->assertEquals('Hiya... stranger.', $result);
  }
}

?>
