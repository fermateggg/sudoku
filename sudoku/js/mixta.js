let arreglo = ["","","","",""];
let winAudio = new Audio('./sonidos/menealo.mp3');
let perdioAudio = new Audio('./sonidos/sponge-bob-disgusting.mp3');
let btnAudio = new Audio('./sonidos/discord-notification.mp3');

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    btnAudio.play();
}

function drop(ev) {
    let idDestino = parseInt(ev.target.id);
    let data = ev.dataTransfer.getData("text");

    if (arreglo[idDestino] === "" && !ev.target.hasChildNodes()) {
        ev.target.appendChild(document.getElementById(data));
        arreglo[idDestino] = data;
    }

    if (arreglo.every(item => item !== "")) {
        validarCoincidencia();
    }
}

function validarCoincidencia() {
    let respuestaCorrecta = ["a", "b", "c", "d", "e"];

    if (JSON.stringify(arreglo) === JSON.stringify(respuestaCorrecta)) {
        document.querySelector("h2").innerHTML = "¡ERES UN GENIO!";
        winAudio.play();
        confetti({ particleCount: 2000, spread: 200 });
    } else {
        document.querySelector("h2").innerHTML = "Ups... Inténtalo de nuevo.";
        perdioAudio.play();
    }
}
