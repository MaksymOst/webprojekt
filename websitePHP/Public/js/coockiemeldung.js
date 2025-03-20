// Check if the user has already accepted the cookies
if (!localStorage.getItem('cookiesAccepted')) {
    // Erstelle das Blur-Div
    const blur = document.createElement("div");
    blur.classList.add("blur-overlay");
    document.body.appendChild(blur);
  
    // Erstelle die Cookie-Meldung als Div
    const cookies = document.createElement("div");
    cookies.classList.add("cookies");
  
    // Erstelle das H1-Element für "Datenschutz"
    const heading = document.createElement("h1");
    heading.textContent = "Datenschutz und Nutzungserlebnis auf Frontbone Interactive.com"; 
    cookies.appendChild(heading);
  
    // Füge den restlichen Text hinzu
    const text = document.createElement("p");
    text.textContent = "Wir und unsere 166 Partner verarbeiten und übermitteln personenbezogene Daten...";
    cookies.appendChild(text);
  
    const button = document.createElement("button");
    button.classList.add("accept-button");
    button.textContent = "Zustimmen";
    cookies.appendChild(button);
  
    button.addEventListener("click", () => {
      cookies.style.display = "none";
      blur.style.display = "none";
      // Speichere die Zustimmung im localStorage
      localStorage.setItem('cookiesAccepted', 'true');
    });
  
    // Füge die komplette Cookie-Meldung dem Body hinzu
    document.body.appendChild(cookies);
  }
  