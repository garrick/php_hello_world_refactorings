<?php
class Localizer {

   function getGreeting($locale) {
      if($locale == "fr") {
        return "Bonjour";
      }
      return "Hello";
   }

}

?>
