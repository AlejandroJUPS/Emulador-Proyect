<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Imagen Pantalla Completa</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* usa contain si no quieres recorte */
            display: block;
        }
    </style>
</head>
<body>
    <img src="descarga.jpg" alt="Imagen">
</body>
</html>
