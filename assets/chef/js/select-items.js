import '../styles/select-items.scss';
import '../../shared/js/base.js';

// Gestion de la sélection des items
document.addEventListener('DOMContentLoaded', function() {
    const itemCards = document.querySelectorAll('.item-card');
    const searchInput = document.getElementById('search-input');
    const createBtn = document.getElementById('create-item-btn');
    const createModal = document.getElementById('create-modal');
    const closeModal = document.getElementById('close-modal');
    const cancelCreate = document.getElementById('cancel-create');
    const createForm = document.getElementById('create-form');
    const validateBtn = document.getElementById('validate-btn');
    const selectionForm = document.getElementById('selection-form');
    const itemsGrid = document.getElementById('items-grid');

    // Toggle sélection sur clic
    itemCards.forEach(card => {
        card.addEventListener('click', function(e) {
            // Ne pas déclencher si on clique sur le formulaire
            if (e.target.tagName === 'INPUT') return;
            
            const checkbox = this.querySelector('.item-checkbox');
            checkbox.checked = !checkbox.checked;
            this.classList.toggle('selected', checkbox.checked);
            
            // Mettre à jour le formulaire caché
            updateSelectionForm();
        });
    });

    // Recherche
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            itemCards.forEach(card => {
                const itemName = card.getAttribute('data-item-name') || '';
                if (itemName.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }

    // Ouvrir modal création
    if (createBtn) {
        createBtn.addEventListener('click', function() {
            if (createModal) {
                createModal.classList.add('active');
            }
        });
    }

    // Fermer modal
    if (closeModal) {
        closeModal.addEventListener('click', function() {
            if (createModal) {
                createModal.classList.remove('active');
                createForm.reset();
            }
        });
    }

    if (cancelCreate) {
        cancelCreate.addEventListener('click', function() {
            if (createModal) {
                createModal.classList.remove('active');
                createForm.reset();
            }
        });
    }

    // Fermer modal en cliquant sur l'overlay
    if (createModal) {
        createModal.addEventListener('click', function(e) {
            if (e.target === createModal) {
                createModal.classList.remove('active');
                createForm.reset();
            }
        });
    }

    // Valider la sélection
    if (validateBtn) {
        validateBtn.addEventListener('click', function() {
            if (selectionForm) {
                // Mettre à jour le formulaire avec les sélections actuelles
                updateSelectionForm();
                selectionForm.submit();
            }
        });
    }

    // Mettre à jour le formulaire de sélection caché
    function updateSelectionForm() {
        if (!selectionForm) return;
        
        // Vider le formulaire
        selectionForm.innerHTML = '';
        
        // Ajouter les checkboxes sélectionnés
        itemCards.forEach(card => {
            const checkbox = card.querySelector('.item-checkbox');
            if (checkbox && checkbox.checked) {
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'checkbox';
                hiddenInput.name = checkbox.name;
                hiddenInput.value = checkbox.value;
                hiddenInput.checked = true;
                selectionForm.appendChild(hiddenInput);
            }
        });
    }
});

