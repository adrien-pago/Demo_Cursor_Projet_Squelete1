import '../styles/modal.scss';
import '../../shared/js/base.js';

// Gestion des modales (pour les détails de plats)
function openModal(content) {
    const modal = document.createElement('div');
    modal.className = 'modal-overlay';
    modal.innerHTML = `
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            ${content}
        </div>
    `;
    document.body.appendChild(modal);
    document.body.style.overflow = 'hidden';
    
    modal.querySelector('.modal-close').addEventListener('click', () => closeModal(modal));
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal(modal);
    });
}

function closeModal(modal) {
    document.body.removeChild(modal);
    document.body.style.overflow = '';
}

// Exposer globalement pour utilisation depuis les templates
window.openMealModal = openModal;

