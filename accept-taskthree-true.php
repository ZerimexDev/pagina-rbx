<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['user_name'])) {

 ?>

<html lang=en>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@800&display=swap" rel="stylesheet">
  <link rel="icon" href="public/logo.ico">

   <title>RBXFLEET.</title>


   <link rel="stylesheet" href="public/css/bootstrap.css">


    <link rel="stylesheet" href="public/style.css">

</head>
<body class="home">

  <header class="header">
    <nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">RBXFLEET.</a>
    <ul class="navbar-nav ml-auto">
      <a href="home.php">
      <button class="btn">Menú</button>
      </a>
    </ul>
    </div>
</nav>
  </header>

  <div class="box">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <section class="main">
    <div class="container py-5">
        <div class="row py-5">
          <div class="pt-5 text-center">
            <div>
              <h1>¡TAREA NÚMERO 3: <span class="green">COMPLETADA!</span> </h1>
              <a href="home.php">
              <button class="btn1 mt-3">Ir al menú</button>
              </a>
            </div>
          </div>
        </div>
</section>

  <script src="public/js/bootstrap.js"></script>

</body>
</html>

<?php
if ($conn) {
  $uname = $_SESSION['user_name'];
  $consulta = "SELECT task3 FROM users WHERE user_name='$uname'";
  $resultado = mysqli_query($conn,$consulta);
  if ($resultado) {
    while ($row = $resultado->fetch_array()) {
      $task3 = $row['task3'];
      if ($task3 == 'no') {
      	$sql2 = "UPDATE users SET task3 = 'yes'";
            mysqli_query($conn, $sql2);


$uname = $_SESSION['user_name'];

  $consulta = "SELECT coins FROM users WHERE user_name='$uname'";
  $resultado = mysqli_query($conn,$consulta);
  if ($resultado) {
    while ($row = $resultado->fetch_array()) {
      $coins = $row['coins'];

      $valor = '5' + $coins;

      $sql = "UPDATE users SET coins = $valor";
            mysqli_query($conn, $sql);


            }
  }


      }else{
        header("Location: home.php");
        exit();
      }
  }

}

}


}else{
     header("Location: index.php");
     exit();
}
