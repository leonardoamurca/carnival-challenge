<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Average Calculator</title>
  </head>
  <body>
    <h1>Average Calculator</h1>
    <form method="POST">
      <input type="text" name="numbers"/>
      <input type="submit" value="Calcular" />
    </form>
    <p> <?php include('./calculate-average.php') ?></p>
  </body>
</html>
