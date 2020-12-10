<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['servicio']) && !empty($_POST['correo'])){
        $servicio = $_POST['servicio'];
        $correo = $_POST['correo'];
        $header = "From: utng_noreply@example.com" . "\r\n";
        $header.= "Reply-To: utng_noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();

        $msg="Estimado Alumno, ex-alumno o publico en general, La Universidad Tecnologica del Norte de Guanajuato ha recibido tu mensaje y se trabajara para darte una respuesta en breve."."\r\n"."Por favor no responder este correo." ."\r\n" ."Saludos." ;
        $mail = @mail($correo,"Servicios de fortelecimiento empresarial".$msg,$header);

        if($mail){
            echo " <script>  alertify.alert('', 'Se ha enviado su solicitud: ".$servicio."... recibira un correo con información en cuanto sea validada').set('onok', 
            function(closeEvent){ 
              $(location).attr('href','./incubacionempresas.php');
              ;} );  </script> ";
        }

    }

}


?>