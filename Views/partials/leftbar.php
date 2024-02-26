<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tu página con iconos</title>
    <!-- Incluir el CDN de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Establece estilos para la barra lateral */
        .left-bar {
            width: 5%; /* Ajusta según lo necesario */
            height: 100%; /* Asume el alto completo de la vista */
            background-color: #E40809; /* Color de fondo */
            position: fixed; /* Fija la posición */
            left: 0;
            top: 0;
            z-index: 1000; /* Se asegura que esté sobre otros elementos */
            display: flex; /* Utiliza Flexbox para el alineamiento */
            flex-direction: column; /* Alinea los elementos verticalmente */
            align-items: center; /* Centra los íconos horizontalmente */
            justify-content: space-around; /* Espaciado entre los íconos */
            padding: 10px 0; /* Espaciado superior e inferior */
        }

        /* Ajusta el tamaño de los íconos y permite que ocupen todo el ancho disponible */
        .left-bar .fa-solid {
            width: 100%; /* Asume el ancho completo de su contenedor */
            text-align: center; /* Asegura que los íconos estén centrados */
            font-size: 2em; /* Aumenta el tamaño de los íconos */
        }
        .left-bar .fa-solid:hover {
            color: white; /* Cambia el color a gris */
        }
    </style>
</head>
<body>
    <div class="left-bar">
        <i class="fa-solid fa-house"></i>
        <i class="fa-solid fa-calendar"></i>
        <div class="separator"></div> <!-- Separador -->
        <i class="fa-solid fa-gear"></i>
    </div>
</body>
</html>
