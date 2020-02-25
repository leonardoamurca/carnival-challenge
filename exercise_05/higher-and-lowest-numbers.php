<?php 
include '../isPostMethod.php';

if (isPostMethod()) {
  $floatArray = stringToFloatArray($_POST["numbers"]);
  
  echo "Lowest Number: " . min($floatArray) . "<br/>";
  echo "Highest Number: " . max($floatArray) . "<br/>";
}

function stringToFloatArray($string) {
  return array_map('floatval', explode(',', $string));
}
?>