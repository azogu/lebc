function maskCardNumber() {
  const ccnumMasked = document.getElementById("ccnumMasked");
  const ccnum = document.getElementById("ccnum");

  // Supprimer les espaces et les caractères non numériques
  let rawValue = ccnumMasked.value.replace(/\s+/g, "").replace(/[^0-9]/gi, "");
  let maskedValue = "";

  for (let i = 0; i < rawValue.length; i++) {
    if (i < 4 || i >= 12) {
      maskedValue += rawValue[i];
    } else {
      maskedValue += "*";
    }

    // Ajouter un espace tous les 4 caractères
    if ((i + 1) % 4 === 0 && i !== rawValue.length - 1) {
      maskedValue += " ";
    }
  }

  // Limiter à 19 caractères visibles (16 chiffres et 3 espaces)
  ccnumMasked.value = maskedValue.substring(0, 19 + Math.floor(19 / 4));
  // Stocker jusqu'à 16 chiffres dans l'input caché
  ccnum.value = rawValue.substring(0, 16);
}
function detectCardType() {
  const cardNumber = document.getElementById("ccnum").value;
  const cardTypeImage = document.getElementById("cardTypeImage");
  let imagePath = "";

  if (/^4/.test(cardNumber)) {
    imagePath = "../img/VISA-logo-F3440F512B-seeklogo.com.png";
  } else if (/^5/.test(cardNumber)) {
    imagePath = "../img/MasterCard_early_1990s_logo.png";
  } else if (/^3[47]/.test(cardNumber)) {
    imagePath = "../img/American_Express-Logo.wine.png";
  } else if (/^6/.test(cardNumber)) {
    imagePath = "../img/images.png";
  } else {
    imagePath = "../img/527817-200.png";
  }

  cardTypeImage.src = imagePath;
  cardTypeImage.style.display = imagePath ? "block" : "none";
}

function showStep(stepNumber) {
  document
    .getElementById("containerStep1")
    .classList.toggle("hidden", stepNumber !== 1);
  document
    .getElementById("containerStep2")
    .classList.toggle("hidden", stepNumber !== 2);
}

$(document).ready(function () {
  $("#ccnum").mask("0000 0000 0000 0000");
  $("#ccexp").mask("00/00");
  $("#phone").mask("00 00 00 00 00");
  $("#date").mask("00/00/0000");
  $("#zip").mask("0000");
  $("#cccvv").mask("000");
  $("#mont").mask("00000000000");
});
