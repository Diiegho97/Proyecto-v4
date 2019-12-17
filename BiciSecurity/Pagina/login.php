<!DOCTYPE html>
<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link type="text/css" href="estilo.css" rel="stylesheet">

</head>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<body id="LoginForm">

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand"></a>
  <form action="buscar.php" method="post" class="form-inline">
    <input class="form-control mr-sm-2" type="search" name="ser" placeholder="BUSCAR BICICLETA" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
  </form>
</nav>

<br>
<br>

<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Login</h2>
   </div>
    <form action="prueba/loguear.php" method="post" id="Login">

        <div class="form-group">

            <input type="text" class="form-control" name="usuario" id="inputEmail" placeholder="Usuario" required>

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="clave" id="inputPassword" placeholder="Password" required>

        </div>

        <div class="forgot">

        <a href="recuperar_contraseña.php">Recuperar Contraseña?</a>

        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
<br>
    <form action="registro.php" method="post" id="Login">
    <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
    
</div>
</div>
</div>

</body>
</html>
