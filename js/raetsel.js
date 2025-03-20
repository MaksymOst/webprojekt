// rätsel spiel test

document.addEventListener('DOMContentLoaded', () => {
    // Elemente auswählen
    const submitBtn = document.getElementById('submitAnswer');
    const answerInput = document.getElementById('answerInput');
    const feedback = document.getElementById('feedback');
    const resetBtn = document.getElementById('resetButton');

    // Antwort-Überprüfung
    submitBtn.addEventListener('click', () => {
        const userAnswer = answerInput.value.trim().toLowerCase();

        if (userAnswer === 'paris') {
            feedback.textContent = '✅ Richtig! Du hast das Rätsel gelöst!';
            feedback.classList.remove('text-danger');
            feedback.classList.add('text-success');
        } else {
            feedback.textContent = '❌ Falsch! Versuch es nochmal.';
            feedback.classList.remove('text-success');
            feedback.classList.add('text-danger');
        }
    });

    // Reset Button → einfach Eingabe und Feedback zurücksetzen
    resetBtn.addEventListener('click', () => {
        answerInput.value = '';
        feedback.textContent = '';
        feedback.classList.remove('text-success', 'text-danger');
    });
});
