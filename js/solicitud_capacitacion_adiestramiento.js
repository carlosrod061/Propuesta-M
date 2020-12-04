var texto= "  <div class='form-group'>"+
"<label class='ml-4' for='exampleInputPassword1'>Subir CV:</label>"+
"<div class='row mt-4'><input class='ml-5' type='file' id='files' name='files[]' multiple />"+
"<output id='list'></output></div>"+
"</div>";



$(document).ready(function() {
 
      
});


function validarSolicitud(){
  var email = $("#email").val();
  var noControl =  $("#noControl").val();
  var campos = [];
  campos.push("email");
  campos.push("noControl");
  var camposValidos=true;
  var errores=0;

  campos.forEach(campo => {
    camposValidos = validarCampo(campo);
    if(!camposValidos){
      errores++;
    }
  });

  if(errores>0){
    alertify.error("Existen campos no validos");
  }else{
    alertify.alert('', 'Se ha enviado su solicitud, recibira un correo con información en cuanto sea validada').set('onok', 
    function(closeEvent){ 
      $(location).attr('href','./capacitacion_adiestramiento.php');
      ;} ); 
  }
  
}



function validarCampo(campo){
  var valorCampo = $("#"+campo).val();
  var campoValido=true;

  if(valorCampo==""){
    $("#"+campo).css("border-color","red");
    campoValido=false;
  }else{
      if(campo=="email"){
        if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
          alertify.error('El correo electronico no tiene formato valido');
          campoValido=false;
          $("#"+campo).css("border-color","red");
        }else{
          $("#"+campo).css("border-color","");
        }
      }else{
        $("#"+campo).css("border-color","");
      }
  }

  return campoValido;
}

function getval(sel)
{
    if(sel.value=="Revisión de CV Tip’s para búsqueda de empleo"){
        $("#CargaArchivo").html(texto);
    }else{
        $("#CargaArchivo").html("");
    }
}



  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
    // files is a FileList of File objects. List some properties.
    var output = [];
    for (var i = 0, f; f = files[i]; i++) {
      output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                  f.size, ' bytes, last modified: ',
                  f.lastModifiedDate.toLocaleDateString(), '</li>');
    }
    document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
