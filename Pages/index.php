<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <nav>
    <a href="?page=home">inicio</a>
    <a href="?page=ours">quienes somos</a>
    <a href="?page=about">contactos</a>
    <a href="?page=admin">administrador</a>
  </nav>
  <main id="cont_Main">

    <?php
    // Aquí puedes incluir contenido PHP dinámico basado en la página actual
    if (isset($_GET['page'])) {
      $page = $_GET['page'];

      if ($page === 'home') {
        include './Pages/home.php';
      } elseif ($page === 'ours') {
        include './Pages/ours.php';
      } elseif ($page === 'about') {
        include './Pages/about.php';
      } elseif ($page === 'admin') {
        include './Pages/admin.php';
      }
    }
    ?>
  </main>
  <footer>
    <small>Práctica realizada por Jesus Antonio Garcia</small>
  </footer>
</body>

</html>