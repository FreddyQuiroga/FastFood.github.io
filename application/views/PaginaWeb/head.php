<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">

    <!-- Site Metas -->
    <title>Fast Food</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>pedidos/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>pedidos/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>pedidos/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>pedidos/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>pedidos/css/responsive.css">
    <!-- color -->
    
    <link id="changeable-colors" rel="stylesheet" href="<?php echo base_url(); ?>pedidos/css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="<?php echo base_url(); ?>pedidos/js/modernizer.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster&display=swap" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    
   
    <script src="<?php echo base_url(); ?>js/validacionRegistroUsuario.js"></script>

<style>
#Titulo{
    font-family: 'Lobster', cursive;
}
#Texto{
    font-family: 'Acme', sans-serif;
}

     
</style>



<script type='text/javascript'>
//PRUEBA DE BING MAP 


    function GetMap() {
        var Events = Microsoft.Maps.Events;

        var map = new Microsoft.Maps.Map('#myMap', {
            credentials:  'AjQBQKLZNXsEUd6-jkNLUl2gQWb4SKARzRFmbZ9emlrzZzL8V3JawVW3g6sQ3X10'
        });
       
        //Request the user's location
        navigator.geolocation.getCurrentPosition(function (position) {
            var loc = new Microsoft.Maps.Location(
                latitud=position.coords.latitude,
               longitud=position.coords.longitude);

            //Add a pushpin at the user's location.
            var pin = new Microsoft.Maps.Pushpin(loc,{
            title: 'Mi Ubicacion',
            subTitle: 'Actual',
            draggable: true,
            icon: '<?php echo base_url();?>uploads/IconoMapa/Punto5.png'
        });

  //var lati;
//console.log('La Latitud y Longitud es '+pin.getLocation().latitude);
//console.log('Solo lati es  '+this.lati);

            map.entities.push(pin);
            Events.addHandler(pin, 'dragend', function () { 

                for (let index = 0; index < 10000000; index++) {
                document.getElementsByName("latitud")[index].value=pin.getLocation().latitude;
            document.getElementsByName("longitud")[index].value=pin.getLocation().longitude;
                }
                });

           map.setView({ center: loc, zoom: 19  });
        });


       
        latitud;
      longitud;

      var map = new Microsoft.Maps.Map('#myMap', {
            credentials:  'AjQBQKLZNXsEUd6-jkNLUl2gQWb4SKARzRFmbZ9emlrzZzL8V3JawVW3g6sQ3X10'
        });
       
        //Request the user's location
        navigator.geolocation.getCurrentPosition(function (position) {
            var loc = new Microsoft.Maps.Location(
                latitud=position.coords.latitude,
               longitud=position.coords.longitude);

               for (let index = 0; index < 10000000; index++) {
            document.getElementsByName("latitud")[index].value=this.latitud;
            document.getElementsByName("longitud")[index].value=this.longitud;
           } 

        });


         
    }


  </script>
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>


    
<script>
$.post('/Pedidos/InsertarPedido', latitud, function(data) {
    alert(data); // should print "Number is 12"
});
</script>





<style>/* Menu Section */
#restaurant-menu {
	padding: 0 0 60px 0;
}
#restaurant-menu .section-title {
	background: #444 url(../img/menu-bg.jpg) center center no-repeat fixed;
	background-size: cover;
}
#restaurant-menu .section-title h2 {
	color: #fff;
}

#restaurant-menu h3 {
	padding: 10px 0;
	text-transform: uppercase;
}
#restaurant-menu .menu-section hr {
	margin: 0 auto;
}
#restaurant-menu .menu-section {
	margin: 0 20px 80px;
}
#restaurant-menu .menu-section-title {
	font-size: 26px;
	display: block;
	font-weight: 500;
	color: #444;
	margin: 20px 0;
	text-align: center;
}
#restaurant-menu .menu-item {
	margin: 35px 0;
	font-size: 18px;
}
#restaurant-menu .menu-item-name {
	font-weight: 600;
	font-size: 17px;
	color: #555;
	border-bottom: 2px dotted rgb(213, 213, 213);
}
#restaurant-menu .menu-item-description {
	font-style: italic;
	font-size: 15px;
}
#restaurant-menu .menu-item-price {
	float: right;
	font-weight: 600;
	color: #555;
	margin-top: -26px;
}
</style>

    

</head>