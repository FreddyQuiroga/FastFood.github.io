function validarAdmin() {
    //Sacamos los Valores de la entrada de texto para validar 
      var txtNombre = document.forms["myForm"]["Nombres"].value;
      var CI = document.forms["myForm"]["CI"].value;
      var PrimerApellido = document.forms["myForm"]["PrimerApellido"].value;
      var email = document.forms["myForm"]["email"].value;
      var SegundoApellido = document.forms["myForm"]["SegundoApellido"].value;
      var Direccion = document.forms["myForm"]["Direccion"].value;
      var FechaNacimiento = document.forms["myForm"]["FechaNacimiento"].value;
      var TelefonoCelular = document.forms["myForm"]["TelefonoCelular"].value;
      var sucursal = document.forms["myForm"]["sucursal"].value;
      //Letras Permitidas en la entrada de Texto.  Si queremos agregar letras acentuadas y/o letra ñ debemos usar
      // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
      const pattern = new RegExp('^[A-Z]|\u00D1|\u00F1|\u00C1|\u00E1|\u00C9|\u00E9|\u00CD|\u00ED|\u00D3|\u00F3|\u00DA|\u00FA|\u00DC|\u00FC+$', 'i');
      //Numeros Permitidos en la entrada de Texto
      //https://www.neoguias.com/validar-un-numero-decimal-con-javascript/
      const numeros = /^\d*(\.\d{1})?\d{0,1}$/;
  
   //Validacion Nombre del Usuario
      if (txtNombre == "") {
          document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre del Usuario Vacio</div>";
          return false;
      }
       else if(!pattern.test(txtNombre))
      {
      document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre del Usuario solo permite letras</div>";
      return false;
       }
       
     else   if (txtNombre.length > 45) {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre del Usuario muy Largo (45 Letras Permitido)</div>";
        return false;
      }
  //Validacion PrimerApellido del Usuario
  if (CI == "") {
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> C.I. Vacio</div>";
    return false;
}
 else if(!numeros.test(CI))
{
document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> C.I.  solo permite Numeros</div>";
return false;
 }
 
else   if (CI.length > 45) {
  document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> C.I. muy Largo (45 Letras Permitido)</div>";
  return false;
}
 //Validacion Segundo Apellido del Usuario

 else if(PrimerApellido == "")
{
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Apellido Paterno Vacio</div>";
    return false;
}
   else if(!pattern.test(PrimerApellido))
     {
     document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Apellido Paterno solo permite letras</div>";
     return false;
     }
 
 
else   if (PrimerApellido.length > 45) {
  document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Apellido Paterno muy Largo (45 Letras Permitido)</div>";
  return false;
}

    //Validacion Email del Usuario
    if (email == "") {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Email del Usuario Vacio </div>";
        return false;
    } 
   else   if (email.length > 40) {
      document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Email del Usuario muy Largo (40 Letras Permitido)</div>";
      return false;
    }
 //Validacion Nombre del Usuario
 if (SegundoApellido == "") {
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Apellido Materno  Vacio</div>";
    return false;
}
 else if(!pattern.test(SegundoApellido))
{
document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Apellido Materno solo permite letras</div>";
return false;
 }
 
else   if (SegundoApellido.length > 45) {
  document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Apellido Materno  muy Largo (45 Letras Permitido)</div>";
  return false;
}

 //Validacion Password del Usuario
 if (Direccion == "") {
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Direccion Vacio</div>";
    return false;
} 
else   if (Direccion.length > 150) {
  document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Contraseña muy Largo (150 Letras Permitido)</div>";
  return false;
}
//Validacion Fecha
if (FechaNacimiento == "") {
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Fecha Nacimiento Vacio</div>";
    return false;
} 
if (sucursal == "") {
  document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Sucursal Vacio</div>";
  return false;
} 
if (TelefonoCelular == "") {
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Telefono Celular Vacio</div>";
    return false;
} 


   
    
  

    }