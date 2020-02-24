<?php 
  include '../isPostMethod.php';

  if (isPostMethod()) {
    $celsius = $_POST["celsius"];
    echo celsiusToFarenheit($celsius) . "°F";
  }

  function celsiusToFarenheit($celsius) {
    return $celsius * 1.8 + 32;
  }
?>