<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Highest and Lowest Numbers Finder</title>
  </head>
  <body>
    <h1>Highest and Lowest Numbers Finder</h1>
    <p>Enter the numbers you want to know the <strong>Highest and Lowest</strong> numbers among them, separated by commas: </p>
    <form method="POST">
      <input type="text" name="numbers"/>
      <input type="submit" value="Find Highest and Lowest number" />
    </form>
    <p> <?php include('./higher-and-lowest-numbers.php') ?></p>
  </body>
</html>
