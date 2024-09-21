<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Sonido de Alerta</title>
</head>
<body>
    <h1>Prueba de Sonido de Alerta</h1>
    <button id="playSound">Reproducir Sonido de Alerta</button>

    <audio id="alertSound" src="https://www.soundjay.com/button/beep-07.wav" preload="auto"></audio>

    <script>
        document.getElementById('playSound').addEventListener('click', function() {
            document.getElementById('alertSound').play();
        });
    </script>
</body>
</html>
