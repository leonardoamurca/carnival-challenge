<?php 
include '../isPostMethod.php';

if (isPostMethod()) {
  $floatArray = stringToFloatArray($_POST["numbers"]);
  
  echo "Arithmetic average: " . calculateAverage($floatArray);
}

function calculateSum($array) {
  $result = 0;
  foreach($array as $number) {
    $result += $number;
  }

  return $result;
}

function calculateAverage($array) {
  $sum = 0 + calculateSum($array);
  $length = sizeof($array);

  return $sum / $length;
}

function stringToFloatArray($string) {
  return array_map('floatval', explode(',', $string));
}
?>