<div class="container my-5">
  <h2 class="text-center mb-4">🔐 Rätsel-Challenge</h2>
  
  <!-- Rätsel 1 -->
  <div id="puzzle1" class="puzzle mb-4">
    <p>Frage 1: Was ist die Hauptstadt von Frankreich?</p>
    <input type="text" class="form-control w-50 mx-auto my-2" id="answer1" placeholder="Antwort eingeben...">
    <button class="btn btn-success" id="submit1">Antwort überprüfen</button>
    <p id="feedback1" class="mt-2"></p>
  </div>

  <!-- Rätsel 2 -->
  <div id="puzzle2" class="puzzle mb-4" style="display: none;">
    <p>Frage 2: Wie viele Beine hat eine Spinne?</p>
    <input type="text" class="form-control w-50 mx-auto my-2" id="answer2" placeholder="Antwort eingeben...">
    <button class="btn btn-success" id="submit2">Antwort überprüfen</button>
    <p id="feedback2" class="mt-2"></p>
  </div>

  <!-- Rätsel 3 -->
  <div id="puzzle3" class="puzzle mb-4" style="display: none;">
    <p>Frage 3: Wieviel ist 3 × 3?</p>
    <input type="text" class="form-control w-50 mx-auto my-2" id="answer3" placeholder="Antwort eingeben...">
    <button class="btn btn-success" id="submit3">Antwort überprüfen</button>
    <p id="feedback3" class="mt-2"></p>
  </div>

  <!-- Abschluss -->
  <div id="congratsMessage" class="text-center" style="display: none;">
    <h3>🎉 Glückwunsch! Du hast alle Rätsel gelöst!</h3>
  </div>
</div>

<!-- Reset Button unter rätsel -->
<div class="text-center mt-4">
    <button id="resetProgress" class="btn btn-danger">🔄 Fortschritt zurücksetzen</button>
  </div>