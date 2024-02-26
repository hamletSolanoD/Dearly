<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Layout con Leftbar, Rightbar y Content</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden; /* Previene desplazamiento lateral en todo el documento */
            overflow-y: hidden; /* Previene desplazamiento vertical en todo el documento */
            box-sizing: border-box;
            font-family: 'Roboto Mono', monospace;
        }

        .left-bar {
            position: fixed;
            width: 5%; /* Ancho de la barra lateral izquierda */
            height: 100%;
            background-color: #FF0000; /* Color de fondo de la barra lateral izquierda */
        }

        .right-bar {
            height: 100%;
            width: 95%;
            overflow-x: hidden; /* Previene desplazamiento lateral en la barra derecha */
        }
        .onGoingProjects{
            margin: 0 auto;
            padding-top: 1%;
            padding-left: 4%;
            padding-right: 4%;
            height: 100%;
            background: #161616; /* Cambiar al color de fondo de la sección */
        }
        .todayDearlyMoments{
            margin: 0 auto;
            padding-top: 1%;
            padding-left: 4%;
            padding-right: 4%;
            background: #161616; /* Cambiar al color de fondo de la sección */
        }

        .top-bar {
            background-color: #333; 
        }

        .content {
            display: flex;
        }

        .content-column {
            overflow-y: hidden; /* Permite el desplazamiento vertical si el contenido es más alto */
        }

        .content-column:first-child {
            flex: 40; /* El primer hijo (columna) ocupará el 60% del espacio */
        }

        .content-column:last-child {
            flex: 60; /* El último hijo (columna) ocupará el 40% del espacio */
        }
       

    </style>
</head>
<body>
    <div class="left-bar">
        <?php require base_path('views/partials/leftbar.php'); ?>
    </div>
    <div class="right-bar">
        <div class="top-bar">
            <?php require base_path('views/partials/topbar.php'); ?>
        </div>
        <div class="content">
            <div class="content-column">
                <div class="onGoingProjects">
                    <?php require base_path('views/homeWidgets/onGoingProjects.php'); ?>
                </div>
            </div>
            <div class="content-column">
                <div class="todayDearlyMoments">
                    <?php require base_path('views/homeWidgets/todayDearlyMoments.php'); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
