import '../styles/reserve.scss';
import '../../shared/js/base.js';

document.addEventListener('DOMContentLoaded', function() {
  const formuleCards = document.querySelectorAll('.formule-card');
  const menuCompletSection = document.getElementById('menu-complet-section');
  const saladeSection = document.getElementById('salade-section');
  const messSection = document.getElementById('mess-section');
  const lieuItems = document.querySelectorAll('.lieu-item');
  const reservationForm = document.getElementById('reservation-form');
  const formFormule = document.getElementById('form-formule');
  const formLieu = document.getElementById('form-lieu');
  const formEntree = document.getElementById('form-entree');
  const formPlat = document.getElementById('form-plat');
  const formAccompagnement = document.getElementById('form-accompagnement');
  const formSalade = document.getElementById('form-salade');

  let selectedFormule = null;
  let selectedLieu = null;

  // Gestion de la sélection des formules
  formuleCards.forEach(card => {
    card.addEventListener('click', function() {
      const formuleId = this.dataset.formuleId;
      const formuleName = this.dataset.formuleName.toLowerCase();

      // Désélectionner toutes les cartes
      formuleCards.forEach(c => c.classList.remove('active'));
      
      // Sélectionner la carte cliquée
      this.classList.add('active');
      selectedFormule = formuleId;
      formFormule.value = formuleId;

      // Masquer toutes les sections
      menuCompletSection.style.display = 'none';
      saladeSection.style.display = 'none';
      messSection.style.display = 'none';

              // Afficher la section correspondante
              if (formuleName === 'menu complet' || formuleName === 'restaurant') {
                menuCompletSection.style.display = 'block';
                saladeSection.style.display = 'none';
                messSection.style.display = 'none';
                // Afficher le footer normal
                const footerCancelBtn = document.getElementById('footer-cancel-btn');
                const validateContainer = document.getElementById('validate-container');
                const messFooterButtons = document.getElementById('mess-footer-buttons');
                if (footerCancelBtn) footerCancelBtn.style.display = 'flex';
                if (validateContainer) validateContainer.style.display = 'flex';
                if (messFooterButtons) messFooterButtons.style.display = 'none';
              } else if (formuleName === 'salade') {
                menuCompletSection.style.display = 'none';
                saladeSection.style.display = 'block';
                messSection.style.display = 'none';
                // Afficher le footer normal
                const footerCancelBtn = document.getElementById('footer-cancel-btn');
                const validateContainer = document.getElementById('validate-container');
                const messFooterButtons = document.getElementById('mess-footer-buttons');
                if (footerCancelBtn) footerCancelBtn.style.display = 'flex';
                if (validateContainer) validateContainer.style.display = 'flex';
                if (messFooterButtons) messFooterButtons.style.display = 'none';
              } else if (formuleName === 'mess') {
                menuCompletSection.style.display = 'none';
                saladeSection.style.display = 'none';
                messSection.style.display = 'block';
                // Afficher le footer Mess
                const footerCancelBtn = document.getElementById('footer-cancel-btn');
                const validateContainer = document.getElementById('validate-container');
                const messFooterButtons = document.getElementById('mess-footer-buttons');
                if (footerCancelBtn) footerCancelBtn.style.display = 'none';
                if (validateContainer) validateContainer.style.display = 'none';
                if (messFooterButtons) messFooterButtons.style.display = 'flex';
              }
            });
          });

  // Sélectionner automatiquement "Formule restaurant" par défaut si pas de réservation
  // Vérifier si on est sur une page avec réservation existante
  const hasReservation = document.querySelector('.reservation-warning') !== null;
  
  if (!hasReservation) {
    const formuleRestaurant = Array.from(formuleCards).find(card => {
      const formuleName = card.dataset.formuleName.toLowerCase();
      return formuleName === 'menu complet' || formuleName === 'restaurant';
    });

    if (formuleRestaurant) {
      // Déclencher le clic pour sélectionner la formule et afficher la section
      // Utiliser setTimeout pour s'assurer que les event listeners sont attachés
      setTimeout(() => {
        formuleRestaurant.click();
      }, 0);
    }
  }

  // Fonction pour afficher un message d'information
  function showInfoMessage(message) {
    // Supprimer le message précédent s'il existe
    const existingMessage = document.getElementById('info-message');
    if (existingMessage) {
      existingMessage.remove();
    }
    
    // Créer le message
    const messageDiv = document.createElement('div');
    messageDiv.id = 'info-message';
    messageDiv.className = 'info-message';
    messageDiv.textContent = message;
    
    // Insérer le message avant le footer
    const footer = document.getElementById('reserve-footer');
    if (footer) {
      footer.parentNode.insertBefore(messageDiv, footer);
    } else {
      document.body.appendChild(messageDiv);
    }
    
    // Supprimer le message après 4 secondes
    setTimeout(() => {
      if (messageDiv && messageDiv.parentNode) {
        messageDiv.classList.add('fade-out');
        setTimeout(() => {
          if (messageDiv && messageDiv.parentNode) {
            messageDiv.remove();
          }
        }, 300);
      }
    }, 4000);
  }

  // Gestion de la sélection des lieux
  lieuItems.forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      
      // Désélectionner tous les lieux
      lieuItems.forEach(i => i.classList.remove('active'));
      
      // Sélectionner le lieu cliqué
      this.classList.add('active');
      selectedLieu = this.dataset.lieuId;
      formLieu.value = selectedLieu;
      
      // Vérifier si on peut soumettre le formulaire
      if (!selectedFormule || !selectedLieu) {
        return;
      }
      
      const formuleName = Array.from(formuleCards).find(c => c.dataset.formuleId === selectedFormule)?.dataset.formuleName.toLowerCase();
      
      // Vérifier que les sélections requises sont faites
      let canSubmit = false;
      
      if (formuleName === 'menu complet' || formuleName === 'restaurant') {
        canSubmit = formEntree.value && formPlat.value && formAccompagnement.value;
        if (!canSubmit) {
          showInfoMessage('Veuillez choisir votre repas avant de valider.');
          return;
        }
      } else if (formuleName === 'salade') {
        canSubmit = formSalade.value;
        if (!canSubmit) {
          showInfoMessage('Veuillez choisir votre repas avant de valider.');
          return;
        }
      } else if (formuleName === 'mess') {
        // Mess ne peut pas être réservé pour l'instant
        canSubmit = false;
        return;
      }

      if (canSubmit) {
        // S'assurer que tous les champs sont bien remplis
        if (!formFormule.value || !formLieu.value) {
          showInfoMessage('Erreur: formulaire incomplet. Veuillez réessayer.');
          return;
        }
        
        // Soumettre le formulaire
        reservationForm.submit();
      }
    });
  });

  // Gestion de la sélection des items de menu (radio buttons)
  const mealRadios = document.querySelectorAll('.meal-radio');
  mealRadios.forEach(radio => {
    radio.addEventListener('change', function() {
      const type = this.closest('.meal-item').dataset.type;
      const value = this.value;

      if (type === 'entree') {
        formEntree.value = value;
      } else if (type === 'plat') {
        formPlat.value = value;
      } else if (type === 'accompagnement') {
        formAccompagnement.value = value;
      } else if (type === 'salade') {
        formSalade.value = value;
      }
    });
  });

});

// Fonctions globales pour la modal d'information (doivent être en dehors de DOMContentLoaded pour être accessibles depuis onclick)
window.showItemInfo = function(button, event) {
  if (event) {
    event.stopPropagation();
    event.preventDefault();
  }
  
  const description = button.dataset.description || '';
  const name = button.dataset.name || '';
  const modal = document.getElementById('item-info-modal');
  const titleElement = document.getElementById('item-info-title');
  const descriptionElement = document.getElementById('item-info-description');
  
  if (!modal || !titleElement || !descriptionElement) {
    console.error('Éléments de la modal non trouvés');
    return;
  }
  
  titleElement.textContent = name;
  
  if (description && description.trim() !== '') {
    descriptionElement.textContent = description;
    descriptionElement.style.fontStyle = '';
    descriptionElement.style.color = '';
  } else {
    descriptionElement.textContent = 'Aucune information pour cet élément';
    descriptionElement.style.fontStyle = 'italic';
    descriptionElement.style.color = '#999';
  }
  
  modal.classList.add('show');
};

window.closeItemInfo = function() {
  const modal = document.getElementById('item-info-modal');
  if (!modal) return;
  
  modal.classList.remove('show');
  
  // Réinitialiser les styles
  const descriptionElement = document.getElementById('item-info-description');
  if (descriptionElement) {
    descriptionElement.style.fontStyle = '';
    descriptionElement.style.color = '';
  }
};

// Fermer la modal en cliquant sur l'overlay
document.addEventListener('click', function(event) {
  const modal = document.getElementById('item-info-modal');
  if (modal && (event.target === modal || event.target.classList.contains('item-info-overlay'))) {
    window.closeItemInfo();
  }
});

// Fermer la modal avec la touche Escape
document.addEventListener('keydown', function(event) {
  if (event.key === 'Escape') {
    window.closeItemInfo();
  }
});
