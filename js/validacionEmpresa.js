function validarEmpresita() {
    //Sacamos los Valores de la entrada de texto para validar 
      var NombreEmpresa = document.forms["myForm"]["NombreEmpresa"].value;
      var TipoPago = document.forms["myForm"]["TipoPago"].value;
      var Direccion = document.forms["myForm"]["Direccion"].value;
      var Categoria = document.forms["myForm"]["Categoria"].value;
      var HorarioInicio = document.forms["myForm"]["HorarioInicio"].value;
      var HorarioFinal = document.forms["myForm"]["HorarioFinal"].value;
      var imagen = document.forms["myForm"]["file-upload"].value;
      var foto = document.forms["myForm"]["foto"].value;

      //Letras Permitidas en la entrada de Texto.  Si queremos agregar letras acentuadas y/o letra ñ debemos usar
      // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
      const pattern = new RegExp('^[A-Z]|\u00D1|\u00F1|\u00C1|\u00E1|\u00C9|\u00E9|\u00CD|\u00ED|\u00D3|\u00F3|\u00DA|\u00FA|\u00DC|\u00FC+$', 'i');
      //Numeros Permitidos en la entrada de Texto
      //https://www.neoguias.com/validar-un-numero-decimal-con-javascript/
      const numeros = /^\d*(\.\d{1})?\d{0,1}$/;
  
   //Validacion Nombre de la Empresa
      if (NombreEmpresa == "") {
          document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre de la Empresa Vacio</div>";
          return false;
      }
       else if(!pattern.test(NombreEmpresa))
      {
      document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre de la Empresa solo permite letras</div>";
      return false;
       }
     else   if (NombreEmpresa.length > 60) {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre de la Empresa muy Largo (60 Letras Permitido)</div>";
        return false;
      }
     //Validacion Tipo Pago de la Empresa
      else if (TipoPago == "") {
          document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Tipo de Pago de la Empresa Vacia</div>";
        return false;
      }
     //Validacion Direccion de la Empresa
     else  if (Direccion == "") {
          document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Direccion de la Empresa Vacio</div>";
  
          return false;
      }
      else if(!pattern.test(Direccion))
      {
      document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Direccion de la Empresa solo permite letras</div>";
      return false;
       }
       else   if (Direccion.length > 60) {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Promocion del Producto muy Largo (60 Letras Permitido)</div>";
        return false;
      }
     //Validacion Categoria de la Empresa
     else  if (Categoria == "") {
          document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Categoria de la Empresa Vacio</div>";
        return false;
      }
      //Validacion HorarioInicio del la Empresa
     else  if (HorarioInicio == "") {
          document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Horario Inicio de la Empresa Vacio</div>";
        return false;
      }
      //Validacion HorarioFinal del la Empresa
    else  if (HorarioFinal == "") {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Horario Final de la Empresa Vacio</div>";
      return false;
    }
  
    if (imagen == "") {
      if (foto == "") {
          document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Imagen de la Empresa Vacio</div>";
          return false;
      }
  }
  
  
    
    }