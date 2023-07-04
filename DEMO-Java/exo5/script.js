function pileOuFace() {
    const resultatElement = document.getElementById("resultat");
  
    const random = Math.random();
  
    if (random < 0.5) {
      resultatElement.textContent = "Pile";
    } else {
      resultatElement.textContent = "Face";
    }
  }