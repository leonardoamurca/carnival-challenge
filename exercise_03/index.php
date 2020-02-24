<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Celsius to Farenheit Converter</title>
  </head>
  <body>
    <h1>Celsius to Farenheit Converter</h1>
    <p>Enter a <strong>Celsius</strong> temperature value: </p>
    <form method="POST">
      <input type="number" name="celsius"/>
      <input type="submit" value="Convert" />
    </form>
    <p> <?php include('./celsius-to-farenheit.php') ?></p>
  </body>
</html>
