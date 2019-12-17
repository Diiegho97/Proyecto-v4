<?php  

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';


class BaseDatos
  {
      public $correo="";

    public function setCorreo($correo)
    {
      $this->correo=$correo;
    }  

    public function conectar()
  	{
      $this->conexion=pg_connect("host=localhost port=5432 dbname=PROYECTO 
      user=postgres password=12345");
  	    
  	    	if ($this->conexion) {
            echo "conexion a base de datos OK"."<br>";
            echo "<a href='login.php'>REGRESAR</a>";
  	    		return $this->conexion;
  	    	}else{
  	    		echo "Error en BD"."<br>";
  	    	}
  	    }
        
  	public function recuperar()
    {
       
        $consulta_c="select * from usuarios where email='$this->correo'";

          $buscar_c= pg_query($this->conexion,$consulta_c);
            $res=pg_fetch_assoc($buscar_c);
              $contrasena=$res['contrasena'];
          if ($res) {
            
              $cambiar_contrasena="update usuarios set contrasena='$contrasena' where 
              email='$this->correo'";
              $actualizacion_contrasena=pg_query($this->conexion,$cambiar_contrasena);
                
                    $mail = new PHPMailer(true);
              try {

                  $mail->SMTPDebug = 0;                      
                  $mail->isSMTP();                                            
                  $mail->Host       = 'smtp.gmail.com';                       
                  $mail->SMTPAuth   = true;                                   
                  $mail->Username   = 'luisfernandoballenlozano@gmail.com';              
                  $mail->Password   = 'luis29ballen';                     
                  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
                  $mail->Port       = 587;                                    

                  $mail->setFrom('luisfernandoballenlozano@gmail.com', 'bici security');
                  $mail->addAddress($this->correo);                           
                  $mail->isHTML(true);                                        
                  $mail->Subject = utf8_decode('Recuperación de contraseña Bici Security');
                  $mail->Body    = utf8_decode('Por motivos de seguridad cambie la contraseña 
                  en el siguiente link'.'<br>'
                  .'http://127.0.0.1:90/login/contrase%C3%B1a.php');
                  $mail->send();
                          echo'<script type="text/javascript">
                                alert("La nueva contraseña se ha enviado a su correo 
                                electrónico, si es la primera vez que recupera contraseña, 
                                el envio puede tardar hasta 10 minutos");
                                window.location.href="login.php";
                                </script>';
              } catch (Exception $e) {
                  echo'<script type="text/javascript">
                        alert("El correo no fue enviado");
                        window.location.href="login.php";
                        </script>'; 
              }
          }else{
                          echo'<script type="text/javascript">
                                alert("El correo ingresado no coincide con ninguna suscripción");
                                window.location.href="login.php";
                                </script>';
          }
    }
}
?>