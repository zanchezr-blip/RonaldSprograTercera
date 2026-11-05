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

  
        </main>

        <section class="servicios-destacados">
            <h2>Servicios Destacados</h2>
            <ul>
                <li>Diagnóstico e inspección</li>
                <li>Mantenimiento preventivo</li>
                <li>Mecánica general y reparaciones</li>
                <li>Electricidad y electrónica automotriz</li>
            </ul>
        </section>
        <div class="cards" id ="cards">

        </div>
        </section>

        <section class="contacto-rapido">
            <h2>Contáctanos</h2>
            <p>Si tienes alguna pregunta o deseas agendar una cita, no dudes en contactarnos.</p>
            <a href="contacto.html" class="btn-contacto">Contáctanos</a>
        </section>
    <main>
        <section class = "history">
            <h1>Nosotros</h1>
            <p>Somos tu taller de confianza, con calidad y honestidad, hacemos de tu seguridad y la de tu vehiculo nuestra prioridad.</p>
        </section>

    <section class="galeria">
        <h2>Galeria</h2>
        <p>Explora nuestra galería de productos y servicios y descubre todo lo que tenemos para ofrecerte.</p>
        <div class="fotos">
            <img src="img/Imagen1.jpg" alt="Describe la foto 1">
            <img src="img/Imagen2.jpg" alt="Describe la foto 2">
            <img src="img/Imagen3.jpg" alt="Describe la foto 3">
            <img src="img/Imagen4.jpg" alt="Describe la foto 4">
            <img src="img/Imagen5.jpg" alt="Describe la foto 5">
            
        </div>
    </section>

<div class="carrusel">
        <img class="slide activa" src="img/Imagen1.jpg" alt="Imagen 1">
        <img class="slide" src="img/Imagen2.jpg" alt="Imagen 2">
        <img class="slide" src="img/Imagen3.jpg" alt="Imagen 3">
        <button id="anterior" type="button">Anterior</button>
        <button id="siguiente" type="button">Siguiente</button>
        
        </div>

    </main>
<section class="preguntas">
        <h2>Preguntas Frecuentes</h2>
        <div class="acordion">
        <div class="item">
            <buttom class="titulo">¿Pregunta1?</buttom>
             <div class="contenido"> <p>Respuesta a la pregunta 1.</p></div>
            </div>
         <div class="item">
            <buttom class="titulo">¿Pregunta2?</buttom>
             <div class="contenido"> <p>Respuesta a la pregunta 2.</p></div>
            </div>            
        <div class="item">
             <buttom class="titulo">¿Pregunta3?</buttom>
            <div class="contenido"> <p>Respuesta a la pregunta 3.</p>></div>
                </div>
                </section>
  </main>
  
<?php include "footer.php"; ?>

    <script src="js/main.js" defer></script>
</body>
</html>