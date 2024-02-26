<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Today Dearly Moments</title>
    <style>
        body {
            background-color: #000; /* Fondo oscuro */
            color: #fff; /* Texto blanco */
            font-family: 'Roboto Mono', monospace; /* Estilo de fuente */
        }
        .checkbox-list {
            list-style: none; /* Remueve los estilos predeterminados de lista */
            padding: 0; /* Remueve el padding predeterminado de lista */
        }
        .checkbox-list li {
            margin-bottom: 10px; /* Espacio entre los elementos de la lista */
        }
        .checkbox-list input[type="checkbox"] {
            accent-color: red; /* Color del checkbox para navegadores modernos */
            margin-right: 10px; /* Espacio entre el checkbox y el texto */
        }
        .checkbox-list label {
            cursor: pointer; /* Cambia el cursor a un puntero */
        }
    </style>
</head>
<body>
    <h2>Today Dearly Moments</h2>
    <ul class="checkbox-list">
        <li>
            <label>
                <input type="checkbox" name="moments" value="birthday-surprise">
                Birthday surprise
            </label>
        </li>
        <li>
            <label>
                <input type="checkbox" name="moments" value="picnic-with-friends">
                Picnic with friends
            </label>
        </li>
        <li>
            <label>
                <input type="checkbox" name="moments" value="romantic-dinner">
                Romantic dinner
            </label>
        </li>
    </ul>
</body>
</html>
