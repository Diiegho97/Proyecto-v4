<!DOCTYPE html>
    <head>
        <title>BiciSecurity</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
            <link rel="Stylesheet" href="Stylereg.css">

    </head7>
    <body>
 
	<div class="main-reg">
			<div class="form-heading">Registrate</div>

			<div class="form-reg">
            <form action="registrar.php" method="post">
					<div class="form-group">
						<div class="form-label">Nombres</div>
						<div class="form-input">
							<input type="text" name="nom1" required>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label">Apellidos</div>
						<div class="form-input">
							<input type="text" name="ape1" required>
						</div>
                    </div>
                    
                    <div class="form-group">
						<div class="form-label">Tipo Documento</div>
						<div class="form-input">
							<select name="tipo">
								<option disabled selected>Seleccione una opcion</option>
								<option value="Cedula de ciudadania">Cedula de Ciudadania</option>
                                <option value="Tarjeta de identidad">Tarjeta de Identidad</option>
                                <option value="Cedula de extranjeria">Cedula de Extranjeria</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label">Numero Documento</div>
						<div class="form-input">
							<input type="text" name="doc" required>
						</div>
                    </div>
                    
                    <div class="form-group">
                        
                        <div class="form-label">Fecha de Nacimiento</div>
                        <div class="form-input">
						
							<input type="date" name="fecha" required>
						</div>
					</div>

                    <div class="form-group">
						<div class="form-label">Celular</div>
						<div class="form-input">
							<input type="text" name="cel" required>
						</div>
                    </div>

                    <div class="form-group">
						<div class="form-label">Localidad</div>
						<div class="form-input">
							<select name="local">
								<option disabled selected>Seleccione una opcion</option>
								<option>Bosa</option>
                                <option>Chapinero</option>
                                <option>Usme</option>
							</select>
						</div>
					</div>

                    <div class="form-group">
						<div class="form-label">barrio</div>
						<div class="form-input">
							<input type="text" name="bar" required>
						</div>
                    </div>

                    <div class="form-group">
						<div class="form-label">Email</div>
						<div class="form-input">
							<input type="email" name="correo" required>
						</div>
                    </div>

					<div class="form-group">
						<div class="form-label">Contraseña</div>
						<div class="form-input">
							<input type="Password" name="contra" requiredd>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label">Confirmar contraseña</div>
						<div class="form-input">
							<input type="Password" name="concontra" required>
						</div>
					</div>

                    <div class="form-group">
                    <div><input type="checkbox" name="acep" requiredd>
						<div class="form-label">Acepta terminos y condiciones</div>
					
						</div>
					</div>


					<div class="bottom-footer">
						<input type="submit" name="regi" value="VALIDAR">
					</div>

<script>
   
   function comprobarClave(){
	   
	   var contra=document.getElementById('contra').value;
	   var concontra=document.getElementById('concontra').value;    
	   
	   if(contra==concontra){
		   alert("Las contraseñas coinciden");
	   }else{
		   alert("Las contraseñas no coinciden");
	   }
	   
   }
</script>

				</form>

			</div>
	</div>

</body>
</html>
