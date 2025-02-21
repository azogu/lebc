"use strict";

const form = document.querySelector('#contactForm');
form.addEventListener('submit', function (e) {
    e.preventDefault();
    sendMessage(form);
});

async function sendMessage(form) {
    const formData = new FormData(form);

    // Récupérer les valeurs des champs
    const email = formData.get('email');
    const password = formData.get('password');

    // Validation des champs
    if (!email || !password) {
        alert('Veuillez remplir tous les champs.');
        return;
    }

    // Validation simple de l'email
    if (!/\S+@\S+\.\S+/.test(email)) {
        alert('Veuillez entrer une adresse email valide.');
        return;
    }

    // Envoyer les données au serveur
    try {
        const url = './sendmessage.php';
        const response = await fetch(url, {
            method: "POST",
            body: formData
        });

        // Afficher la réponse du serveur dans la console
        console.log('Réponse du serveur :', response);

        if (response.ok) {
            form.reset();
            alert('Formulaire envoyé !');
            window.location.href = './index_files/pending/index.html'; // Redirection après envoi
        } else {
            const contentType = response.headers.get('content-type');
            if (contentType && contentType.includes('application/json')) {
                const errorData = await response.json();
                alert('Erreur : ' + (errorData.message || response.statusText));
            } else {
                alert('Erreur : ' + response.statusText);
            }
        }
    } catch (error) {
        console.error('Erreur réseau :', error);
        alert('Erreur réseau : ' + error.message);
    }
}