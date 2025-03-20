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
        <p>Frage 1: Was ist die Hauptstadt von Frankreich?</p>
        <input type="text" id="answer1" class="form-control w-50 mx-auto my-2" placeholder="Antwort eingeben...">
        <button class="btn btn-success" id="submit1">Antwort überprüfen</button>
        <p id="feedback1" class="mt-2 text-center"></p>
    </div>

    <!-- Frage 2 -->
    <div id="puzzle2" class="puzzle mb-4" style="display: none;">
        <p>Frage 2: Wie viele Beine hat eine Spinne?</p>
        <input type="text" id="answer2" class="form-control w-50 mx-auto my-2" placeholder="Antwort eingeben...">
        <button class="btn btn-success" id="submit2">Antwort überprüfen</button>
        <p id="feedback2" class="mt-2 text-center"></p>
    </div>

    <!-- Frage 3 -->
    <div id="puzzle3" class="puzzle mb-4" style="display: none;">
        <p>Frage 3: Wieviel ist 3 × 3?</p>
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

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Rätsel-Elemente definieren
    const puzzles = [
        { id: 1, answer: 'paris', feedback: 'feedback1' },
        { id: 2, answer: '8', feedback: 'feedback2' },
        { id: 3, answer: '9', feedback: 'feedback3' }
    ];

    puzzles.forEach((puzzle, index) => {
        const puzzleDiv = document.getElementById(`puzzle${puzzle.id}`);
        const answerInput = document.getElementById(`answer${puzzle.id}`);
        const submitBtn = document.getElementById(`submit${puzzle.id}`);
        const feedback = document.getElementById(puzzle.feedback);

        submitBtn.addEventListener('click', () => {
            const userAnswer = answerInput.value.trim().toLowerCase();

            if (userAnswer === puzzle.answer) {
                feedback.textContent = '✅ Richtig!';
                feedback.classList.remove('text-danger');
                feedback.classList.add('text-success');

                puzzleDiv.style.display = 'none';

                // Nächstes Rätsel oder Glückwunsch
                if (index < puzzles.length - 1) {
                    const nextPuzzle = document.getElementById(`puzzle${puzzle.id + 1}`);
                    nextPuzzle.style.display = 'block';
                } else {
                    document.getElementById('congratsMessage').style.display = 'block';
                }

            } else {
                feedback.textContent = '❌ Falsch! Versuch es nochmal.';
                feedback.classList.remove('text-success');
                feedback.classList.add('text-danger');
            }
        });
    });

    // Reset-Button → alles zurücksetzen
    const resetBtn = document.getElementById('resetButton');
    resetBtn.addEventListener('click', () => {
        puzzles.forEach(puzzle => {
            const puzzleDiv = document.getElementById(`puzzle${puzzle.id}`);
            const answerInput = document.getElementById(`answer${puzzle.id}`);
            const feedback = document.getElementById(puzzle.feedback);

            puzzleDiv.style.display = (puzzle.id === 1) ? 'block' : 'none';
            answerInput.value = '';
            feedback.textContent = '';
            feedback.classList.remove('text-success', 'text-danger');
        });

        document.getElementById('congratsMessage').style.display = 'none';
    });
});
</script>

</body>
</html>
