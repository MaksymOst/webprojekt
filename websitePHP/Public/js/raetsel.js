
document.addEventListener('DOMContentLoaded', () => {
    // Rätsel-Elemente definieren
    const puzzles = [
        { id: 1, answer: '3 meter', feedback: 'feedback1' },
        { id: 2, answer: 'marco', feedback: 'feedback2' },
        { id: 3, answer: 'nils', feedback: 'feedback3' }
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
