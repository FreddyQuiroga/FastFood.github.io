function validarProducto() {
  //Sacamos los Valores de la entrada de texto para validar 
    var nombreProducto = document.forms["myForm"]["nombreProducto"].value;
    var precio = document.forms["myForm"]["precio"].value;
    var promocion = document.forms["myForm"]["promocion"].value;
    var categoria = document.forms["myForm"]["categoria"].value;
    var empresa = document.forms["myForm"]["empresa"].value;
    var imagen = document.forms["myForm"]["file-upload"].value;
    var foto = document.forms["myForm"]["foto"].value;

    //Letras Permitidas en la entrada de Texto.  Si queremos agregar letras acentuadas y/o letra ñ debemos usar
    // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
    const pattern = new RegExp('^[A-Z]|\u00D1|\u00F1|\u00C1|\u00E1|\u00C9|\u00E9|\u00CD|\u00ED|\u00D3|\u00F3|\u00DA|\u00FA|\u00DC|\u00FC+$', 'i');
    //Numeros Permitidos en la entrada de Texto
    //https://www.neoguias.com/validar-un-numero-decimal-con-javascript/
    const numeros = /^\d*(\.\d{1})?\d{0,1}$/;

 //Validacion Nombre del Producto
    if (nombreProducto == "") {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre del Producto Vacio</div>";
        return false;
    }
     else if(!pattern.test(nombreProducto))
    {
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre del Producto solo permite letras</div>";
    return false;
     }
     
   else   if (nombreProducto.length > 45) {
      document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre Producto muy Largo (45 Letras Permitido)</div>";
      return false;
    }
   //Validacion Precio del Producto
    if (precio == "") {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Precio del Producto Vacio</div>";
      return false;
    }
    else if(!numeros.test(precio))
    {
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Precio del Producto solo permite Numeros decimales. Maximo con dos dígitos de precisión</div>";
    return false;
     }

   //Validacion Promocion del Producto
     if (promocion == "") {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Promocion del Producto Vacio</div>";

        return false;
    }
    else if(!pattern.test(promocion))
    {
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Promocion del Producto solo permite letras</div>";
    return false;
     }
     else   if (promocion.length > 45) {
      document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Promocion del Producto muy Largo (45 Letras Permitido)</div>";
      return false;
    }
   //Validacion Promocion del Producto
     if (categoria == "") {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Categoria del Producto Vacio</div>";
      return false;
    }
    //Validacion Promocion del Producto
    else  if (empresa == "") {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Empresa del Producto Vacio</div>";
      return false;
    }
    //Validacion Promocion del Producto
  
  if (imagen == "") {
    if (foto == "") {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Imagen del Producto Vacio</div>";
        return false;
    }
  }


  
  }