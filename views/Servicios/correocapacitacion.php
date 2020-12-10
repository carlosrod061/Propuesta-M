<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['nomAlumno']) && !empty($_POST['correo']) && !empty($_POST['noControl']) && !empty($_POST['nomCarrera']) && !empty($_POST['nomServicio'])){
        $nomAlumno = $_POST['nomAlumno'];
        $correo = $_POST['correo'];
        $noControl = $_POST['noControl'];
        $nomCarrera = $_POST['nomCarrera'];
        $nomServicio = $_POST['nomServicio'];
        $header = "From: utng_noreply@example.com" . "\r\n";
        $header.= "Reply-To: utng_noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $msg="Estimado: " . $nomAlumno . ". \r\n \r\n" . "nos haz proporcionado los siguientes datos:". "\r\n" . "\r\n" ."  Numero de control: " . $noControl . "\r\n"  ."  Carrera: " . $nomCarrera.
        "\r\n"."\r\n"  ."Hemos recibido tu mensaje y se trabajara para darte una respuesta en breve."."\r\n"."Por favor no responder este correo." ."\r\n" ."Saludos." ;
        $mail = @mail($correo,"Solicitud de servicio(capacitación y adiestramiento):".$nomServicio,$msg,$header);
        if($mail){
            echo " <script>  alertify.alert('', 'Se ha enviado su solicitud, recibira un correo con información en cuanto sea validada').set('onok', 
            function(closeEvent){ 
              $(location).attr('href','./capacitacion_adiestramiento.php');
              ;} );  </script> ";
        }
    }
}

?>