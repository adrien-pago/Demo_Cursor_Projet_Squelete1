import '../styles/menu-day.scss';
import '../../shared/js/base.js';

// Gestion des modes de livraison
document.querySelectorAll('.delivery-mode-item').forEach(item => {
    item.addEventListener('click', function(e) {
        // Ne pas déclencher si on clique sur l'icône info ou la flèche
        if (e.target.closest('.info-icon') || e.target.closest('.carte-arrow-link')) {
            return;
        }
        
        const checkbox = this.querySelector('.mode-checkbox');
        const isClosure = this.classList.contains('closure-mode');
        
        if (isClosure) {
            // Si c'est la fermeture, désactiver tous les autres modes
            document.querySelectorAll('.delivery-mode-item:not(.closure-mode)').forEach(mode => {
                mode.classList.remove('active');
                mode.querySelector('.mode-checkbox').checked = false;
            });
            
            // Toggle la fermeture
            const wasActive = this.classList.contains('active');
            this.classList.toggle('active');
            
            // Afficher/masquer l'icône info
            const infoIcon = this.querySelector('.info-icon');
            if (this.classList.contains('active')) {
                if (infoIcon) infoIcon.style.display = 'block';
                // Ouvrir la modal pour le commentaire
                openCommentModal();
            } else {
                if (infoIcon) infoIcon.style.display = 'none';
                // Supprimer le commentaire
                document.getElementById('comment-input').value = '';
            }
        } else {
            // Pour les autres modes, toggle simple
            checkbox.checked = !checkbox.checked;
            this.classList.toggle('active', checkbox.checked);
            
            // Si on active un mode, désactiver la fermeture
            if (checkbox.checked) {
                const closureMode = document.getElementById('closure-mode');
                if (closureMode) {
                    closureMode.classList.remove('active');
                    const closureInfo = closureMode.querySelector('.info-icon');
                    if (closureInfo) closureInfo.style.display = 'none';
                    document.getElementById('comment-input').value = '';
                }
            }
        }
    });
});

// Gestion des cartes
document.querySelectorAll('.carte-item').forEach(item => {
    item.addEventListener('click', function(e) {
        // Ne pas déclencher si on clique sur la flèche
        if (e.target.closest('.carte-arrow-link')) {
            return;
        }
        
        const checkbox = this.querySelector('.carte-checkbox');
        const isMess = this.classList.contains('mess-mode');
        
        if (!isMess) {
            checkbox.checked = !checkbox.checked;
            this.classList.toggle('active', checkbox.checked);
        }
    });
});

// Modal de commentaire
function openCommentModal() {
    const modal = document.getElementById('comment-modal');
    if (modal) {
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
}

function closeCommentModal() {
    const modal = document.getElementById('comment-modal');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = '';
    }
}

// Ouvrir modal avec icône info
document.getElementById('info-comment-btn')?.addEventListener('click', function(e) {
    e.stopPropagation();
    openCommentModal();
});

// Fermer modal
document.getElementById('close-comment-modal')?.addEventListener('click', closeCommentModal);
document.getElementById('cancel-comment')?.addEventListener('click', closeCommentModal);

// Sauvegarder commentaire
document.getElementById('save-comment')?.addEventListener('click', function() {
    const comment = document.getElementById('comment-input').value.trim();
    if (comment) {
        // Activer la fermeture si commentaire présent
        const closureMode = document.getElementById('closure-mode');
        if (closureMode) {
            closureMode.classList.add('active');
            const infoIcon = closureMode.querySelector('.info-icon');
            if (infoIcon) infoIcon.style.display = 'block';
        }
        // Verrouiller la date
        document.getElementById('locked-input').value = '1';
        document.getElementById('available-input').value = '0';
    }
    closeCommentModal();
});

// Bouton annuler
document.getElementById('cancel-btn')?.addEventListener('click', function() {
    if (confirm('Êtes-vous sûr de vouloir annuler les modifications ?')) {
        // Récupérer l'URL depuis un attribut data ou utiliser une route relative
        const agendaUrl = document.getElementById('cancel-btn')?.dataset.agendaUrl || '/chef/agenda';
        window.location.href = agendaUrl;
    }
});

// Gestion de la soumission du formulaire
document.getElementById('menu-day-form')?.addEventListener('submit', function(e) {
    // S'assurer que les champs cachés sont à jour
    const closureActive = document.getElementById('closure-mode')?.classList.contains('active');
    if (closureActive) {
        document.getElementById('locked-input').value = '1';
        document.getElementById('available-input').value = '0';
    }
});
