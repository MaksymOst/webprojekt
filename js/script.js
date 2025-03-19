// Konstanten für die beiden Klassen (X und Kreis)
const X_CLASS = 'x';
const CIRCLE_CLASS = 'circle';

// Alle möglichen Gewinnkombinationen (Index-Bezug auf die Zellen)
const WINNING_COMBINATIONS = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

// Der gesamte Code wartet, bis das HTML fertig geladen ist:
document.addEventListener('DOMContentLoaded', () => {

    // Wählt alle Spielfeld-Zellen aus
    const cellElements = document.querySelectorAll('[data-cell]');
    
    // Restart-Button auswählen
    const restartButton = document.getElementById('restartButton');
    
    // Variable für den Spieler-Zug (X beginnt immer)
    let circleTurn;

    // Funktion zum Starten bzw. Zurücksetzen des Spiels
    function startGame() {
        circleTurn = false; // X fängt an
        cellElements.forEach(cell => {
            // Entfernt vorhandene Klassen (X oder Kreis)
            cell.classList.remove(X_CLASS);
            cell.classList.remove(CIRCLE_CLASS);
            // Entfernt vorherigen Text (X oder O)
            cell.textContent = '';
            // Entfernt eventuell alte Click-Events
            cell.removeEventListener('click', handleClick);
            // Fügt neuen Click-Event hinzu (nur einmal pro Zelle!)
            cell.addEventListener('click', handleClick, { once: true });
        });
    }

    // Funktion, wenn auf eine Zelle geklickt wird
    function handleClick(e) {
        const cell = e.target;
        const currentClass = circleTurn ? CIRCLE_CLASS : X_CLASS; // Wer ist dran?
        placeMark(cell, currentClass); // Markiere die Zelle
        if (checkWin(currentClass)) {
            // Wenn jemand gewinnt
            setTimeout(() => alert(`${currentClass.toUpperCase()} gewinnt!`), 10);
        } else if (isDraw()) {
            // Wenn Unentschieden
            setTimeout(() => alert('Unentschieden!'), 10);
        } else {
            swapTurns(); // Spieler wechseln
        }
    }

    // Fügt X oder O zur Zelle hinzu
    function placeMark(cell, currentClass) {
        cell.classList.add(currentClass);
        cell.textContent = currentClass === X_CLASS ? 'X' : 'O';
    }

    // Spieler wechseln (X ⇄ O)
    function swapTurns() {
        circleTurn = !circleTurn;
    }

    // Überprüft, ob jemand gewonnen hat
    function checkWin(currentClass) {
        return WINNING_COMBINATIONS.some(combination => {
            return combination.every(index => {
                return cellElements[index].classList.contains(currentClass);
            });
        });
    }

    // Überprüft, ob das Spielfeld voll ist → Unentschieden
    function isDraw() {
        return [...cellElements].every(cell => {
            return cell.classList.contains(X_CLASS) || cell.classList.contains(CIRCLE_CLASS);
        });
    }

    // Event-Listener für Restart-Button
    restartButton.addEventListener('click', startGame);

    // Spiel initial starten
    startGame();
});


// rätsel spiel test

document.addEventListener('DOMContentLoaded', () => {
    // Fortschritt laden (oder neuen Fortschritt anlegen)
    let progress = JSON.parse(localStorage.getItem('progress')) || {
        puzzle1: false,
        puzzle2: false,
        puzzle3: false
    };

    // Elemente holen
    const puzzles = [
        { id: 1, question: 'paris', feedback: 'feedback1' },
        { id: 2, question: '8', feedback: 'feedback2' },
        { id: 3, question: '9', feedback: 'feedback3' }
    ];

    puzzles.forEach((puzzle, index) => {
        const puzzleDiv = document.getElementById(`puzzle${puzzle.id}`);
        const answerInput = document.getElementById(`answer${puzzle.id}`);
        const submitBtn = document.getElementById(`submit${puzzle.id}`);
        const feedback = document.getElementById(puzzle.feedback);

        // Wenn Fortschritt vorhanden → zeigen
        if (progress[`puzzle${puzzle.id}`]) {
            puzzleDiv.style.display = 'none';
            if (index === puzzles.length - 1) {
                showCongrats();
            } else {
                const nextPuzzle = document.getElementById(`puzzle${puzzle.id + 1}`);
                nextPuzzle.style.display = 'block';
            }
        }

        // Antwort-Überprüfung
        submitBtn.addEventListener('click', () => {
            const userAnswer = answerInput.value.trim().toLowerCase();

            if (userAnswer === puzzle.question) {
                feedback.textContent = '✅ Richtig!';
                feedback.classList.add('text-success');

                // Fortschritt speichern
                progress[`puzzle${puzzle.id}`] = true;
                localStorage.setItem('progress', JSON.stringify(progress));

                // Aktuelles Rätsel ausblenden
                puzzleDiv.style.display = 'none';

                // Nächstes Rätsel anzeigen oder Glückwunsch
                if (index < puzzles.length - 1) {
                    const nextPuzzle = document.getElementById(`puzzle${puzzle.id + 1}`);
                    nextPuzzle.style.display = 'block';
                } else {
                    showCongrats();
                }

            } else {
                feedback.textContent = '❌ Falsch! Versuch es nochmal.';
                feedback.classList.add('text-danger');
            }
        });
    });

    function showCongrats() {
        const message = document.getElementById('congratsMessage');
        message.style.display = 'block';
    }
});

// Reset-Button Funktionalität
const resetBtn = document.getElementById('resetProgress');

resetBtn.addEventListener('click', () => {
    localStorage.removeItem('progress'); // Fortschritt löschen
    location.reload(); // Seite neu laden
});
