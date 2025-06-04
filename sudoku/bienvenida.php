<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
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
    <div class="contenedor">
<p class="letra">Ordena los números enteros del 1 al 10, te animas?...</p>
<!-- Elaboramos una tabla de 5 columnas y 5 filas -->
<table>
<!-- ondrop=que pasa cuando se suelta el elemento arrastrado -->
<!-- ondragover= especifico donde se suelta el elemento arrastrado -->
            <tr>
                    <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                    <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                    <td class="no-contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                    <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                    <td class="no-contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                    <td class="no-contiene" id="5" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                    <td class="no-contiene" id="6" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                    <td class="no-contiene" id="7" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                    <td class="no-contiene" id="8" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                    <td class="no-contiene" id="9" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <tr>
</table>
<br>
<div class="contenedor-alternativa">
<!-- ondragstart=que debe suceder cuando se arrastra el elemento -->
<!-- draggable=el elemento se puede arrastrar-->
                    <div class="caja" draggable="true" ondragstart="drag(event)" id="i">9</div>
                    <div class="caja" draggable="true" ondragstart="drag(event)" id="b">2</div>
                    
                    <div class="caja" draggable="true" ondragstart="drag(event)" id="d">4</div>
                    <div class="caja" draggable="true" ondragstart="drag(event)" id="e">5</div>
                    <div class="caja" draggable="true" ondragstart="drag(event)" id="a">1</div>
                    <div class="caja" draggable="true" ondragstart="drag(event)" id="f">6</div>
                    <div class="caja" draggable="true" ondragstart="drag(event)" id="g">7</div>
                    <div class="caja" draggable="true" ondragstart="drag(event)" id="h">8</div>
                    <div class="caja" draggable="true" ondragstart="drag(event)" id="c">3</div>
                    <div class="caja" draggable="true" ondragstart="drag(event)" id="j">10</div>
</div>
<br>
<!--visualizar resultado -->
<div class="resultado">
<h2 ></h2>
</div>
<!-- fin visualizar resultado -->
</div>
<script src="js/ordenar.js"></script>
</body>
</html>