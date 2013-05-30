<?php
require_once("Object/Localizer.php");

class LocalizerTest extends PHPUnit_Framework_TestCase {

   private $unit;

   function setUp(){
      $this->unit = new Localizer();
   }

   function testRespodsWithEnglishForNull(){
      $this->assertEquals("Hello", $this->unit->getGreeting(null));
   }

   function testRespodsWithFrenchForFr(){
      $this->assertEquals("Bonjour", $this->unit->getGreeting("fr"));
   }

}


?>
