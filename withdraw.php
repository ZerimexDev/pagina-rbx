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

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <script src="public/js/jquery-3.6.0.min.js"></script> 


<link rel="stylesheet" href="public/style3.css">

   <title>RBXFLEET.</title>

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

  <div class="form">
  <p>INGRESE EL MONTO DE ROBUX A <span class="green">RETIRAR</span></p>
  <form>
    <input type="text" class="insert-name" name="uname" placeholder="Monto de R$" required>
    <input type="button" class="btn-login" onclick="boton()" value="OK">
    </form>
   </div>

  <script src="public/js/bootstrap.js"></script>


</body>
</html>

<script>
function boton(){
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'El minimo para retirar es 25R$, intenta conseguirlos.',
})
}

function burger(){
  const burger = document.querySelector('.main-container');
  const nav = document.querySelector('.nav-links');
  const logout = document.querySelector('.logout');

  nav.classList.toggle('nav-active');
  logout.classList.toggle('logout-active');
}
</script>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>