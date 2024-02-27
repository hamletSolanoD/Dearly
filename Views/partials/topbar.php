<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Top Bar Example</title>
    <!-- Asegúrate de incluir el CDN de Font Awesome si planeas usar íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
            body {
                margin: 0;
                font-family: 'Roboto Mono', monospace;
                margin-left: 5%;
            }
        .top-bar {
            width: 100%;
            background-color: #161616;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-sizing: border-box; /* Asegura que padding no aumente el ancho */
        }
        .top-bar h1 {
            margin: 0;
            font-size: 40px;
        }
        .top-bar p {
            margin: 0;
            font-size: 20px;
        }
        .notifications {
            font-size: 16px;
        }
        .search-bar {
            display: flex;
            align-items: center;
            background: #111111;
            border: 1px solid #555;
            padding: 0; /* Establece el padding interno a 0 */
            height: 50px; /* Altura fija para la barra de búsqueda */
            width: 55%;
        }

        .search-bar input[type="search"] {
            width: 100%; /* Establece el ancho al 100% del contenedor */
            height: 100%; /* Establece la altura al 100% de la barra de búsqueda */
            background: transparent;
            border: none;
            padding: 0 10px; /* Espaciado interno para el texto dentro del input */
            margin: 0; /* Elimina cualquier margen */
            color: white;
            -webkit-appearance: none; /* Remueve estilos predeterminados en navegadores WebKit */
            -moz-appearance: none; /* Remueve estilos predeterminados en navegadores como Firefox */
            appearance: none; /* Remueve estilos predeterminados en navegadores modernos */
        }

        .search-bar i {
            padding: 0 10px; /* Espaciado interno para el ícono de búsqueda */
            color: white;
            cursor: pointer;
        }

        /* Elimina el resaltado azul que aparece al seleccionar el input */
        input[type="search"]:focus {
            outline: none;
        }
        .notifications{
            background-color: #ff0000;
            border-radius: 100%;
            padding: 5px;
            font-size: 40px;
        }


    </style>
</head>
<body>
    <div class="top-bar">
        <div>
            <h1>Welcome, friend!</h1>
            <p>Share your memories with</p>
        </div>
        <div class="search-bar">
            <input type="search" placeholder="Search memories">
            <i class="fa fa-search"></i> <!-- Ícono de búsqueda -->
        </div>
        <div class="notifications">
            16 
        </div>
    </div>
</body>
</html>
