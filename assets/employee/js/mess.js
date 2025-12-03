import '../styles/mess.scss';
import '../../shared/js/base.js';

// Validation du formulaire mess
document.querySelector('form')?.addEventListener('submit', function(e) {
    const message = document.getElementById('message').value.trim();
    if (message.length < 10) {
        e.preventDefault();
        alert('Le message doit contenir au moins 10 caractères.');
    }
});

