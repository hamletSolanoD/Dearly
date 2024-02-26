<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>On Going Projects</title>
    <style>
        body {
            font-family: 'Roboto Mono', monospace;
            background: #161616; /* Cambiar al color de fondo deseado */
            color: white;
            width: 100%;
            height: 100%;
            overflow-x: hidden; /* Previene desplazamiento lateral en todo el documento */
        }
        .title {
            padding-bottom: 5%;
            padding-left: 1%;
        }
        .projects-container {
            margin: 0 auto;
            padding: 5%;
            height: 70%;
            border: 2px solid #444; /* Borde alrededor del contenedor */
            background: #161616; /* Cambiar al color de fondo de la sección */
        }

        .more-button {
            display: block;
            width: 25%;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            border: none;
            background: white; /* Cambiar al color de fondo del botón */
            cursor: pointer;
        }

        .onGoingList {
            list-style: none; /* Elimina los estilos de lista predeterminados */
            padding: 0; /* Elimina el padding predeterminado */
            margin: 0; /* Elimina el margen predeterminado */
            max-height: 90%; /* Altura máxima del contenedor */
            min-height: 90%; /* Altura mínima del contenedor */
            height: 90%;
            overflow-y: auto; /* Muestra un scrollbar verticalmente si se excede la altura máxima */
        }

        li {
            padding: 5%; /* Espacio alrededor del contenido en cada elemento de la lista */
            border-bottom: 1px solid #444; /* Línea divisoria entre elementos de lista */
        }

        li:last-child {
            border-bottom: none; /* Elimina la línea divisoria del último elemento */
        }

        li i {
            margin-right: 8px; /* Espacio entre el icono y el texto */
            color: white; /* Color de los íconos */
        }
        .button-footer{
            height: 100%;
            padding-top: 3%;
        }
    </style>
</head>
<body>
    <h2 class="title">On Going Projects</h2>
    <div class="projects-container">
        <ul class="onGoingList">
            <li>Project 1</li>
            <li>Project 2</li>
            <li>Project 3</li>
            <li>Project 4</li>
            <li>Project 5</li>
            <li>Project 6</li>
            <li>Project 7</li>
            <li>Project 8</li>
            <li>Project 9</li>
            <li>Project 10</li>
        </ul>
        <div class="button-footer"><button class="more-button">MORE</button> </div>
    </div>
</body>
</html>
