import '../styles/account.scss';
import '../../shared/js/base.js';

document.addEventListener('DOMContentLoaded', function() {
  // Validation du formulaire de crédit
  const creditForm = document.querySelector('.credit-form');
  if (creditForm) {
    creditForm.addEventListener('submit', function(e) {
      const amountInput = document.getElementById('amount');
      const amount = parseFloat(amountInput.value);
      
      if (!amount || amount <= 0) {
        e.preventDefault();
        alert('Veuillez entrer un montant valide supérieur à 0.');
        return false;
      }
      
      if (amount > 10000) {
        e.preventDefault();
        alert('Le montant maximum autorisé est de 10 000 €.');
        return false;
      }
    });
  }
  
  // Validation du formulaire de changement de mot de passe
  const passwordForm = document.querySelector('.password-form');
  if (passwordForm) {
    passwordForm.addEventListener('submit', function(e) {
      const newPassword = document.getElementById('new_password').value;
      const confirmPassword = document.getElementById('confirm_password').value;
      
      if (newPassword !== confirmPassword) {
        e.preventDefault();
        alert('Les nouveaux mots de passe ne correspondent pas.');
        return false;
      }
      
      if (newPassword.length < 8) {
        e.preventDefault();
        alert('Le nouveau mot de passe doit contenir au moins 8 caractères.');
        return false;
      }
    });
  }
});

