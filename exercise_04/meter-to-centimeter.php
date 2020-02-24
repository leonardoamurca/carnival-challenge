<?php 
  include '../isPostMethod.php';

  if (isPostMethod()) {
    $meter = $_POST["meter"];
    echo meterToCentimeter($meter) . "cm";
  }

  function meterToCentimeter($meter) {
    return $meter * 100;
  }
?>