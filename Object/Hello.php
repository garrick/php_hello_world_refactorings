<?php
  class Hello {

    private $localizer;

    function sayHello($name) {
      $greeting = $this->localizer->getGreeting(null);
      return $greeting . ($name == null ? "... stranger." : ", {$name}!");
    }

    function setLocalizer($localizer) {
      $this->localizer = $localizer;
    }
  }
?>

