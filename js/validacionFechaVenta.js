function validarFechas() {
    //Sacamos los Valores de la entrada de texto para validar 
      var fechaInicio = document.forms["myForm"]["fechaInicio"].value;
      var fechaFinal = document.forms["myForm"]["fechaFinal"].value;
     
      //Letras Permitidas en la entrada de Texto.  Si queremos agregar letras acentuadas y/o letra ñ debemos usar
      // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
      const pattern = new RegExp('^[A-Z]|\u00D1|\u00F1|\u00C1|\u00E1|\u00C9|\u00E9|\u00CD|\u00ED|\u00D3|\u00F3|\u00DA|\u00FA|\u00DC|\u00FC+$', 'i');
      //Numeros Permitidos en la entrada de Texto
      //https://www.neoguias.com/validar-un-numero-decimal-con-javascript/
      const numeros = /^\d*(\.\d{1})?\d{0,1}$/;
  
   //Validacion Nombre de la Empresa
      if (fechaInicio == "") {
          document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Fecha de Inicio Vacio</div>";
          return false;
      }
       else if(fechaFinal == "")
      {
      document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Fecha Final Vacio</div>";
      return false;
       }
   
 
    
    }