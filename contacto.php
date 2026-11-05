<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi sitio</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    
<?php include "header.php"; ?>
   
    <form action="enviar.php" method="post" class="formulario">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea>

        <p id="mensajes"></p>
        
        <button type="submit">Enviar</button>
        </form>
<?php include "footer.php"; ?>

    <script src="js/main.js" defer></script>
</body>
</html>