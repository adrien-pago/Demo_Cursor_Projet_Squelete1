import '../styles/accounts.scss';

window.openEditModal = function(userId, userName, userEmail) {
    const modal = document.getElementById('editModal');
    const form = document.getElementById('editForm');
    const nameInput = document.getElementById('editName');
    const emailInput = document.getElementById('editEmail');
    
    // Remplir le formulaire
    nameInput.value = userName || '';
    emailInput.value = userEmail || '';
    
    // Définir l'action du formulaire
    form.action = `/chef/accounts/${userId}/edit`;
    
    // Afficher le modal
    modal.classList.add('show');
}

window.closeEditModal = function() {
    const modal = document.getElementById('editModal');
    modal.classList.remove('show');
}

window.openDeleteModal = function(userId, userName) {
    const modal = document.getElementById('deleteModal');
    const form = document.getElementById('deleteForm');
    const userNameElement = document.getElementById('deleteUserName');
    
    // Remplir le nom
    userNameElement.textContent = userName;
    
    // Définir l'action du formulaire
    form.action = `/chef/accounts/${userId}/delete`;
    
    // Afficher le modal
    modal.classList.add('show');
}

window.closeDeleteModal = function() {
    const modal = document.getElementById('deleteModal');
    modal.classList.remove('show');
}

window.openCreateModal = function() {
    const modal = document.getElementById('createModal');
    modal.classList.add('show');
}

window.closeCreateModal = function() {
    const modal = document.getElementById('createModal');
    modal.classList.remove('show');
    // Réinitialiser le formulaire
    const form = document.getElementById('createForm');
    if (form) {
        form.reset();
    }
}

window.generateRandomPassword = function() {
    // Générer un mot de passe aléatoire de 16 caractères
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*';
    let password = '';
    for (let i = 0; i < 16; i++) {
        password += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    
    const passwordInput = document.getElementById('createPassword');
    if (passwordInput) {
        passwordInput.value = password;
        // Sélectionner le texte pour faciliter la copie
        passwordInput.select();
        passwordInput.setSelectionRange(0, 99999); // Pour mobile
    }
}

// Fermer les modals en cliquant sur l'overlay
document.addEventListener('DOMContentLoaded', function() {
    const editModal = document.getElementById('editModal');
    const deleteModal = document.getElementById('deleteModal');
    const createModal = document.getElementById('createModal');
    
    editModal.addEventListener('click', function(e) {
        if (e.target === editModal) {
            closeEditModal();
        }
    });
    
    deleteModal.addEventListener('click', function(e) {
        if (e.target === deleteModal) {
            closeDeleteModal();
        }
    });
    
    createModal.addEventListener('click', function(e) {
        if (e.target === createModal) {
            closeCreateModal();
        }
    });
    
    // Fermer avec la touche Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeEditModal();
            closeDeleteModal();
            closeCreateModal();
        }
    });
    
    // Gestion de la recherche : soumettre automatiquement quand le champ est vidé
    const searchInput = document.getElementById('searchInput');
    const searchForm = document.getElementById('searchForm');
    let searchTimeout;
    
    if (searchInput && searchForm) {
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            const value = this.value.trim();
            
            // Si le champ est vidé, soumettre immédiatement pour annuler la recherche
            if (value === '') {
                searchForm.submit();
            }
        });
    }
});

