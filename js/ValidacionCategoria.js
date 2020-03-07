function validarCategorias() {
    //Sacamos los Valores de la entrada de texto para validar 
      var NombreCategoria = document.forms["myForm"]["NombreCategoria"].value;
     

      //Letras Permitidas en la entrada de Texto.  Si queremos agregar letras acentuadas y/o letra ñ debemos usar
      // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
      const pattern = new RegExp('^[A-Z]|\u00D1|\u00F1|\u00C1|\u00E1|\u00C9|\u00E9|\u00CD|\u00ED|\u00D3|\u00F3|\u00DA|\u00FA|\u00DC|\u00FC+$', 'i');
      //Numeros Permitidos en la entrada de Texto
      //https://www.neoguias.com/validar-un-numero-decimal-con-javascript/
      const numeros = /^\d*(\.\d{1})?\d{0,1}$/;
  
   //Validacion Nombre de la Empresa
      if (NombreCategoria == "") {
          document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre de Categoria  Vacio</div>";
          return false;
      }
       else if(!pattern.test(NombreCategoria))
      {
      document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre de Categoria solo permite letras</div>";
      return false;
       }
     else   if (NombreEmpresa.length > 50) {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre de la Categoria muy Largo (50 Letras Permitido)</div>";
        return false;
      }

  
    
    }