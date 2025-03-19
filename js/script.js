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
