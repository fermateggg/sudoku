<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplicacion</title>
    <link rel="stylesheet" href="css/estilos_bienvenida.css">
    <link rel="stylesheet" href="css/estilos_ordenar.css">
    <!-- script confetti -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
    <!-- fin script confetti -->
</head>
<body class="fondo">
<header class="menu-header">
    <nav class="main-nav">
        <ul>
            <li><a href="bienvenida.php">Inicio</a></li>
            <li><a href="sumar.php">Sumar</a></li>
            <li><a href="restar.php">Restar</a></li>
            <li><a href="multiplicar.php">Multiplicar</a></li>
            <li><a href="division.php">División</a></li>
                            <li><a href="mixta.php">mixta</a></li>
            <li><a href="index.php">Cerrar</a></li>
        </ul>
    </nav>
</header>
<br>
<div class="contenedor">
    <h1 class="multiplicar">MULTIPLICAR</h1>
    <!-- Elaboramos una tabla de 5 columnas y 5 filas -->
    <table>
        <!-- ondrop=que pasa cuando se suelta el elemento arrastrado -->
        <!-- ondragover= especifico donde se suelta el elemento arrastrado -->
        <tr>
            <td class="contiene">25</td>
            <td class="letra">X</td>
            <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="letra">=</td>
            <td class="contiene">100</td>
        </tr>
        <tr>
            <td class="letra">X</td>
            <td></td>
            <td class="letra">X</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="letra">X</td>
            <td class="no-contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="letra">=</td>
            <td class="contiene">91</td>
        </tr>
        <tr>
            <td class="letra">=</td>
            <td></td>
            <td class="letra">=</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="contiene">175</td>
            <td class="letra">X</td>
            <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="letra">X</td>
            <td class="no-contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        </tr>
    </table>
    <br>
    <div class="contenedor-alternativa">
        <!-- ondragstart=que debe suceder cuando se arrastra el elemento -->
        <!-- draggable=el elemento se puede arrastrar-->
        <div class="caja" draggable="true" ondragstart="drag(event)" id="a">4</div>
        <div class="caja" draggable="true" ondragstart="drag(event)" id="b">7</div>
        <div class="caja" draggable="true" ondragstart="drag(event)" id="c">13</div>
        <div class="caja" draggable="true" ondragstart="drag(event)" id="d">52</div>
        <div class="caja" draggable="true" ondragstart="drag(event)" id="e">9100</div>
    </div>
    <br>
    <!-- visualizar resultado -->
    <div class="resultado">
        <h2></h2>
    </div>
    <!-- fin visualizar resultado -->
</div>
<script src="js/multiplicar.js"></script>
</body>
</html>
