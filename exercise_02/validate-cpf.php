<?php 
  include '../isPostMethod.php';

  if (isPostMethod()) {
    $cpf = $_POST["cpf"];
    
    echo validateCpf($cpf);
  }

  function validateCpf($cpf) {
    $cpfArray = stringToArray($cpf);
    $isFirstDigitValid = validateFirstDigit($cpfArray);
    $isSecondDigitValid = validateSecondDigit($cpfArray);
    $isSpecialCasesValid = validateSpecialCases($cpfArray);

    return ($isFirstDigitValid && $isSecondDigitValid && $isSpecialCasesValid) ? 'CPF Válido!' : 'CPF Inválido!';

  }

  function validateFirstDigit($cpfArray) {
    $firstDigit = (int)$cpfArray[9];
    $sum = 0;
    $rest = 0;
    
    for ($i = 0; $i < 9; $i++) {
      $sum += ((int)$cpfArray[$i]) * ((count($cpfArray) - 1) - $i);
    }

    $rest = ($sum * 10) % 11;
    if ($rest == 10 || $rest == 11) {
      $rest = 0;
    }

     return $firstDigit == $rest ;
  }

  function validateSecondDigit($cpfArray) {
    $secondDigit = (int)$cpfArray[10];
    $sum = 0;
    $rest = 0;

    for ($i = 0; $i < 10; $i++) {
      $sum += ((int)$cpfArray[$i]) * ((count($cpfArray)) - $i);
    }

    $rest = ($sum * 10) % 11;
    if ($rest == 10 || $rest == 11) {
      $rest = 0;
    }

     return $secondDigit == $rest ;
  }

  function validateSpecialCases($cpfArray) {
    for($i = 0; $i < 10; $i++) {
      if (isOneValuedArray($i, $cpfArray)) {
        return false;
      };
    }

    return true;
  }

  function isOneValuedArray($value, $array) {
    return (reset($array) == $value && count(array_unique($array)) == 1);
  }

  function stringToArray($string) {
    return str_split($string, count($string));
  }

?>