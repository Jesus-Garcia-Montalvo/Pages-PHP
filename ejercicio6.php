<?php


if ($_POST) {
  $ValorA = $_POST['valorA'];
  $Valorb = $_POST['valorB'];


  if ($ValorA != $Valorb) {


    echo 'el valor a es difeente al valor b';
    # code...
  } else {

    echo "el valor a es igual al valor b";
  }
  # code...

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

  <form action="ejercicio6.php" method="post">

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Valor A</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="valorA">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Valor B</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="valorB">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</body>

</html>