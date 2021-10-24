<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['user_name'])) {

 ?>

 <html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@800&display=swap" rel="stylesheet">
  <link rel="icon" href="public/logo.ico">


<link rel="stylesheet" href="public/styles.css">

   <title>RBXFLEET.</title>

</head>
</head>
<body>
  <header>
    <a class="logo"><?php echo $_SESSION['user_name']; ?></a>
    <nav>
    <ul class="nav-links">
    <li><a href="home.php">Menú</a></li>
    <li><a href="withdraw.php">Retirar R$</a></li>
    </ul>
</nav>
    <a href="logout.php">
      <button class="logout">Salir</button>
      </a>
      <div onclick="burger()" class="main-container">
        <div id="hamburger">
          <button>
            <span class="top-line"></span>
            <span class="middle-line"></span>
            <span class="bottom-line"></span>
          </button>
        </div>
      </div>
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


<?php 
$uname = $_SESSION['user_name'];
if ($conn) {
  $consulta = "SELECT coins FROM users WHERE user_name='$uname'";
  $resultado = mysqli_query($conn,$consulta);
  if ($resultado) {
    while ($row = $resultado->fetch_array()) {
      $coins = $row['coins'];
      ?>

  <section class="main">
    <div class="contenedor">
        <div class="row py-5">
          <div class="pt-5 text-center">
            <div>
              <h1>TU SALDO DE R$ ES: <span class="green"><?php echo $coins; ?>R$</span></h1>
              <h3 class="texto">ALERTA: Recuerda completar las tareas como debe, de lo contrario, no podrá retirar los robux...</h3>

            </div>
          </div>
        </div>
</section>
<?php
      }
  }
}
?>
<div class="all">
<div class="container">
  <div class="card">
    <div class="circle">
      <h2>#1 Mirar Anuncios</h2>
  </div>
  <div class="content">
    <p>Salta un <span class="green">acortador</span> mirando los anuncios y gana 5R$!</p>
    <?php
if ($conn) {
  $uname = $_SESSION['user_name'];
  $consulta = "SELECT task1 FROM users WHERE user_name='$uname'";
  $resultado = mysqli_query($conn,$consulta);
  if ($resultado) {
    while ($row = $resultado->fetch_array()) {
      $task1 = $row['task1'];
      if ($task1 == 'yes') {
      $boton = 'Listo';

    }else{
     $boton = 'Realizar'; 
    }
  }
}
}

?>

<a class="botons" href="#"><?php echo $boton; ?></a>

  </div>
</div>

  <div class="card">
    <div class="circle">
      <h2>#2 Mirar Anuncios</h2>
  </div>
  <div class="content">
    <p>Salta un <span class="green">acortador</span> mirando los anuncios y gana 5R$!</p>
        <?php
if ($conn) {
  $uname = $_SESSION['user_name'];
  $consulta = "SELECT task2 FROM users WHERE user_name='$uname'";
  $resultado = mysqli_query($conn,$consulta);
  if ($resultado) {
    while ($row = $resultado->fetch_array()) {
      $task2 = $row['task2'];
      if ($task2 == 'yes') {
      $botonss = 'Listo';

    }else{
     $botonss = 'Realizar'; 
    }
  }
}
}

?>

    <a class="botons" href="#"><?php echo $boton; ?></a>
  </div>
</div>

  <div class="card">
    <div class="circle">
      <h2>#3 Mirar Anuncios</h2>
  </div>
  <div class="content">
    <p>Salta un <span class="green">acortador</span> mirando los anuncios y gana 5R$!</p>
        <?php
if ($conn) {
  $uname = $_SESSION['user_name'];
  $consulta = "SELECT task3 FROM users WHERE user_name='$uname'";
  $resultado = mysqli_query($conn,$consulta);
  if ($resultado) {
    while ($row = $resultado->fetch_array()) {
      $task3 = $row['task3'];
      if ($task3 == 'yes') {
      $boton = 'Listo';

    }else{
     $boton = 'Realizar'; 
    }
  }
}
}

?>
    <a class="botons" href="#"><?php echo $boton; ?></a>
  </div>
</div>
</div>
</div>

  <script src="public/js/bootstrap.js"></script>
  
<script>
function burger(){
  const burger = document.querySelector('.main-container');
  const nav = document.querySelector('.nav-links');
  const logout = document.querySelector('.logout');

  nav.classList.toggle('nav-active');
  logout.classList.toggle('logout-active');
}
</script>
</body>
</html>





<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>