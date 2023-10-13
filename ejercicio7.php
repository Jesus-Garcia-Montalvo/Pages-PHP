<?php


if ($_POST) {

    $boton = $_POST['btnValue'];


    switch ($boton) {

        case 1:
            echo "preciono el boton 1";
            break;
        case 2:
            echo "preciono el boton 2";
            break;
        case 3:
            echo "preciono el boton 3";
            break;
    };






    # code...
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio7.php" method="post">
        <input type="submit" name="btnValue" value="1">
        <br>
        <input type="submit" name="btnValue" value="2">
        <br>
        <input type="submit" name="btnValue" value="3">

    </form>
</body>

</html>