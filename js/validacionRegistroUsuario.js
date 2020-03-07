function validarUsuario() {
    //Sacamos los Valores de la entrada de texto para validar 
      var txtNombre = document.forms["myForm"]["txtNombre"].value;
      var txtemail = document.forms["myForm"]["txtemail"].value;
      var txtPrimerApellido = document.forms["myForm"]["txtPrimerApellido"].value;
      var txtNombreUsuario = document.forms["myForm"]["txtNombreUsuario"].value;
      var txtSegundoApellido = document.forms["myForm"]["txtSegundoApellido"].value;
      var txtPassword = document.forms["myForm"]["txtPassword"].value;
      var txtDireccion = document.forms["myForm"]["txtDireccion"].value;
      var txtRepetirContra = document.forms["myForm"]["txtRepetirContra"].value;
      //Letras Permitidas en la entrada de Texto.  Si queremos agregar letras acentuadas y/o letra ñ debemos usar
      // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
      const pattern = new RegExp('^[A-Z]|\u00D1|\u00F1|\u00C1|\u00E1|\u00C9|\u00E9|\u00CD|\u00ED|\u00D3|\u00F3|\u00DA|\u00FA|\u00DC|\u00FC+$', 'i');
      //Numeros Permitidos en la entrada de Texto
      //https://www.neoguias.com/validar-un-numero-decimal-con-javascript/
      const numeros = /^\d*(\.\d{1})?\d{0,1}$/;
  
   //Validacion Nombre del Usuario
      if (txtNombre == "") {
          document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre Completo del Usuario Vacio</div>";
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
  if (txtPrimerApellido == "") {
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Apellido Paterno  Vacio</div>";
    return false;
}
 else if(!pattern.test(txtPrimerApellido))
{
document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Apellido Paterno  solo permite letras</div>";
return false;
 }
 
else   if (txtPrimerApellido.length > 45) {
  document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Apellido Paterno  muy Largo (45 Letras Permitido)</div>";
  return false;
}
 //Validacion Segundo Apellido del Usuario

 if(txtSegundoApellido != "")
{
    if(!pattern.test(txtSegundoApellido))
     {
     document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Apellido Materno solo permite letras</div>";
     return false;
     }
 }
 
else   if (txtSegundoApellido.length > 45) {
  document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Apellido Materno muy Largo (45 Letras Permitido)</div>";
  return false;
}
    //Validacion Email del Usuario
    if (txtemail == "") {
        document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Email del Usuario Vacio </div>";
        return false;
    } 
   else   if (txtNombre.length > 40) {
      document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Email del Usuario muy Largo (40 Letras Permitido)</div>";
      return false;
    }
 //Validacion Nombre del Usuario
 if (txtNombreUsuario == "") {
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre Usuario  Vacio</div>";
    return false;
}
 else if(!pattern.test(txtNombreUsuario))
{
document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre Usuario solo permite letras</div>";
return false;
 }
 
else   if (txtNombreUsuario.length > 30) {
  document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Nombre Usuario  muy Largo (30 Letras Permitido)</div>";
  return false;
}
 //Validacion Password del Usuario
 if (txtPassword == "") {
    document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Contraseña Vacio</div>";
    return false;
} 
else   if (txtNombreUsuario.length > 50) {
  document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Contraseña muy Largo (50 Letras Permitido)</div>";
  return false;
}

   //Validacion Direccion  del Usuario
 else if (txtDireccion == "") {
  document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Direccion Vacio</div>";
  return false;
} 
else   if (txtDireccion.length > 150) {
document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong> Direccion muy Largo (150 Letras Permitido)</div>";
return false;
}
  else   if (txtRepetirContra!=txtPassword) {
      document.getElementById("Notificar").innerHTML = "<div class='alert alert-danger'><strong>Obligatorio!</strong>La Contraseña no coincide con la Contraseña Repetida.</div>";
      return false;
    }
  

    }