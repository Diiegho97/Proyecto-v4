<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link type="text/css" href="estilo.css" rel="stylesheet">

</head>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<body id="LoginForm">

<center>
<img class="lo" src="IMAGENES/logo proyecto.png" height="150" width="300"> 

<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Recuperar contraseña</h2>
   </div>
        <form method="POST" action="recuperar_con.php">
            <div class="form-group">
              <p>Ingrese el correo electronico asosiado a la cuenta que desea recuperar la contraseña </p>
              <input type="email" name="email" id="recovery-email" class="form-control" autocomplete="off" require>
                </div>
                <br>
            <div class="form-group">
                <button type="submit" class="btn btn-custom">Recuperar</button>
                            </div>  
                                </form>  
                        </div> 
                    </div> 
                </div> 

    </footer>
  </div>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


</body>


<script type="text/javascript">
function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
    
}
</script>

</div> 
</center> 
</body>
</html>