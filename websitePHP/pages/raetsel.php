<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rätsel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container my-5">
    <h2 class="text-center mb-4">🔐 Rätsel-Challenge</h2>

    <!-- Frage 1 -->
    <div id="puzzle1" class="puzzle mb-4">
        <p>Frage 1: Aus welcher Entfernung kann Pascal Marco am Gang erkennen? </p>
        <input type="text" id="answer1" class="form-control w-50 mx-auto my-2" placeholder="Antwort eingeben...">
        <button class="btn btn-success" id="submit1">Antwort überprüfen</button>
        <p id="feedback1" class="mt-2 text-center"></p>
    </div>

    <!-- Frage 2 -->
    <div id="puzzle2" class="puzzle mb-4" style="display: none;">
        <p>Frage 2: Wer ist die Ikone des 21. Jahrhunderts wenn es um Peniskunst geht?</p>
        <input type="text" id="answer2" class="form-control w-50 mx-auto my-2" placeholder="Antwort eingeben...">
        <button class="btn btn-success" id="submit2">Antwort überprüfen</button>
        <p id="feedback2" class="mt-2 text-center"></p>
    </div>

    <!-- Frage 3 -->
    <div id="puzzle3" class="puzzle mb-4" style="display: none;">
        <p>Frage 3: Wen werden wir alle in der DRV Familie vermissen? </p>
        <input type="text" id="answer3" class="form-control w-50 mx-auto my-2" placeholder="Antwort eingeben...">
        <button class="btn btn-success" id="submit3">Antwort überprüfen</button>
        <p id="feedback3" class="mt-2 text-center"></p>
    </div>

    <!-- Abschluss -->
    <div id="congratsMessage" class="text-center" style="display: none;">
        <h3>🎉 Glückwunsch! Du hast alle Rätsel gelöst!</h3>
    </div>

    <!-- Reset Button -->
    <div class="text-center mt-4">
        <button id="resetButton" class="btn btn-danger">🔄 Zurücksetzen</button>
    </div>

</div>

<script src="js/raetsel.js"></script>

</body>
</html>
