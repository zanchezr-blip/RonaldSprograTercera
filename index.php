<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Sitio</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  
<?php include "header.php"; ?>

 <main class="contenedor">
        <section class ="portada">
            <h1>Bienvenido a su Taller Mecánico RS</h1>
            <p>Somos tu taller de confianza, con calidad y honestidad, hacemos de tu seguridad y la de tu vehiculo nuestra prioridad.</p>
        </section>


        <section class="servicios-destacados">
            <h2>Servicios Destacados</h2>

            <div class="cards" id="cards">
</div>
</section>


    <section class="galeria">
        <h2>Galeria</h2>
        <p>Explora nuestra galería de productos y servicios y descubre todo lo que tenemos para ofrecerte.</p>

    </section>

<div class="carrusel">
        <img class="slide activa" src="img/imagen1.jpg" alt="imagen 1">
        <img class="slide" src="img/imagen2.jpg" alt="imagen 2">
        <img class="slide" src="img/imagen3.jpg" alt="imagen 3">
        <img class="slide" src="img/imagen4.jpg" alt="imagen 4">
        <img class="slide" src="img/imagen5.jpg" alt="imagen 5">
        <img class="slide" src="img/imagen6.jpg" alt="imagen 6">
        <button id="anterior" type="button">Anterior</button>
        <button id="siguiente" type="button">Siguiente</button>
        
        </div>


    <section class="preguntas">
    <h2>Preguntas Frecuentes</h2>
    <div class="acordion">
        <div class="item">
        <button class="titulo">¿Necesito agendar cita o puedo llevar mi auto directamente?</button>
        <div class="contenido"><p>Recomendamos siempre agendar una cita para garantizar un tiempo de espera mínimo, 
            sin Sin embargo tambien aceptamos vehículos por orden de llegada, aunque el tiempo de espera puede ser mayor.</p></div>
        </div>
        <div class="item">
        <button class="titulo">¿Cual es el precio del diagnostico de mi vehículo?</button>
        <div class="contenido"><p>El costo en página es aproximado pero va a depender exclusivamente del tipo de inspección 
            o escaneo que se vaya a requerir para dar un diagnostico preciso.</p></div>
        </div>            
        <div class="item">
        <button class="titulo">¿Cuanto tiempo se tardará la reparación?</button>
        <div class="contenido"><p>El tiempo puede variar considerabemente dependiendo de la complejidad de la reparacion
            así como la disponibilidad de los repuestos, una vez terminado el diagnostico se le dará un estimado de tiempo 
            para la reparación.</p></div>
        </div>
         <div class="item">
        <button class="titulo">¿Dan garantía por las reparaciones?</button>
        <div class="contenido"><p>Sí, todas nuestras reparaciones y repuestos cuentan con una garantía por escrito y en ella
            se especifica el tiempo de validez y las condiciones de la misma.</p></div>
        </div>         
            
    </section>


  </main>
  
<?php include "footer.php"; ?>

    <script src="js/main.js" defer></script>
</body>
</html>