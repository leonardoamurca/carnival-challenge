<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Average Calculator</title>
  </head>
  <body>
    <h1>Average Calculator</h1>
    <p>Enter the numbers you want to know the <strong>Arithmetic Average</strong> separated by commas: </p>
    <form method="POST">
      <input type="text" name="numbers"/>
      <input type="submit" value="Calculate" />
    </form>
    <p> <?php include('./calculate-average.php') ?></p>
  </body>
</html>
