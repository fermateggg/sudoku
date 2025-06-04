<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones Mixtas</title>
    <link rel="stylesheet" href="css/estilos_bienvenida.css">
    <link rel="stylesheet" href="css/estilos_ordenar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
    <style>
        .tabla-respuestas {
            margin: 20px auto;
            border-collapse: separate;
            border-spacing: 10px;
        }

        .tabla-respuestas td {
            width: 60px;
            height: 60px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            vertical-align: middle;
            border-radius: 8px;
            font-size: 22px;
            cursor: grab;
            user-select: none;
            box-shadow: 2px 2px 6px rgba(0,0,0,0.2);
        }

        .tabla-respuestas td:active {
            cursor: grabbing;
        }
    </style>
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
            <li><a href="mixta.php">Mixta</a></li>
            <li><a href="autor.php">Autor</a></li>
            <li><a href="cerrar.php">Cerrar</a></li>
        </ul>
    </nav>
</header>

<div class="contenedor">
    <h1 class="titulo">Operaciones Mixtas</h1>
    <table>
        <!-- 5 FILAS, 10 COLUMNAS TOTAL -->
        <tr>
            <td class="contiene">12</td><td class="letra">+</td><td class="contiene">3</td><td class="letra">=</td><td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">15</td><td class="letra">−</td><td class="contiene">4</td><td class="letra">=</td><td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        </tr>
        <tr>
            <td class="contiene">5</td><td class="letra">×</td><td class="contiene">6</td><td class="letra">=</td><td class="no-contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">24</td><td class="letra">÷</td><td class="contiene">6</td><td class="letra">=</td><td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        </tr>
        <tr>
            <td class="contiene">2</td><td class="letra">+</td><td class="contiene">9</td><td class="letra">=</td><td class="no-contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">20</td><td class="letra">−</td><td class="contiene">7</td><td class="letra">=</td><td class="no-contiene" id="5" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        </tr>
        <tr>
            <td class="contiene">3</td><td class="letra">×</td><td class="contiene">7</td><td class="letra">=</td><td class="no-contiene" id="6" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">40</td><td class="letra">÷</td><td class="contiene">5</td><td class="letra">=</td><td class="no-contiene" id="7" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        </tr>
        <tr>
            <td class="contiene">(4 × 5)</td><td class="letra">+</td><td class="contiene">10</td><td class="letra">=</td><td class="no-contiene" id="8" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">(36 ÷ 6)</td><td class="letra">−</td><td class="contiene">3</td><td class="letra">=</td><td class="no-contiene" id="9" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        </tr>
    </table>

    <!-- Tabla de resultados -->

    <table class="tabla-respuestas">
        <tr>
            <td class="caja" draggable="true" ondragstart="drag(event)" id="a">15</td>
            <td class="caja" draggable="true" ondragstart="drag(event)" id="b">11</td>
            <td class="caja" draggable="true" ondragstart="drag(event)" id="c">30</td>
            <td class="caja" draggable="true" ondragstart="drag(event)" id="d">4</td>
            <td class="caja" draggable="true" ondragstart="drag(event)" id="e">11</td>
            <td class="caja" draggable="true" ondragstart="drag(event)" id="f">13</td>
            <td class="caja" draggable="true" ondragstart="drag(event)" id="g">21</td>
            <td class="caja" draggable="true" ondragstart="drag(event)" id="h">8</td>
            <td class="caja" draggable="true" ondragstart="drag(event)" id="i">20</td>
            <td class="caja" draggable="true" ondragstart="drag(event)" id="j">3</td>
        </tr>
    </table>

    <div class="resultado">
        <h2 id="mensaje"></h2>
    </div>
</div>

<script>
    const respuestas = ["15", "11", "30", "4", "11", "13", "21", "8", "30", "3"];
    let correctas = 0;
    const total = respuestas.length;

    const winAudio = new Audio('./sonidos/exito.mp3');
    const failAudio = new Audio('./sonidos/error.mp3');
    const btnAudio = new Audio('./sonidos/accion.mp3');

    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
        btnAudio.play();
    }

    function drop(ev) {
        ev.preventDefault();
        let data = ev.dataTransfer.getData("text");
        let target = ev.target;

        if (!target.hasChildNodes()) {
            let dragged = document.getElementById(data);
            target.appendChild(dragged);

            let id = parseInt(target.id);
            let valorUsuario = dragged.innerText;

            if (valorUsuario === respuestas[id]) {
                correctas++;
                if (correctas === total) {
                    document.getElementById("mensaje").innerText = "¡Juego completado correctamente!";
                    winAudio.play();
                    confetti({ particleCount: 200, spread: 100 });
                } else {
                    document.getElementById("mensaje").innerText = "¡Correcto!";
                }
            } else {
                document.getElementById("mensaje").innerText = "Incorrecto, intenta de nuevo.";
                failAudio.play();
                correctas = 0;
            }
        }
    }
</script>

</body>
</html>
