<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>CPF Validator</title>
  </head>
  <body>
    <h1>CPF Validator</h1>
    <p>Enter the <strong>CPF</strong> you want to know if is valid:</p>
    <form method="POST">
      <input type="text" name="cpf" maxlength="11" />
      <input type="submit" value="Validate" />
    </form>
    <p> <?php include('./validate-cpf.php') ?></p>
  </body>
</html>
