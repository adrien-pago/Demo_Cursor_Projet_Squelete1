import '../styles/settings.scss';
import '../../shared/js/base.js';

document.addEventListener('DOMContentLoaded', function() {
  const lieusContainer = document.getElementById('lieus-container');
  const formulesContainer = document.getElementById('formules-container');
  const addLieuBtn = document.getElementById('add-lieu');
  const addFormuleBtn = document.getElementById('add-formule');
  const deleteModal = document.getElementById('delete-modal');
  const closeDeleteModal = document.getElementById('close-delete-modal');
  const cancelDeleteBtn = document.getElementById('cancel-delete');
  const confirmDeleteBtn = document.getElementById('confirm-delete');
  const deleteMessage = document.getElementById('delete-message');
  const deleteWarning = document.getElementById('delete-warning');
  const deleteWarningText = document.getElementById('delete-warning-text');
  const deleteLieuIds = document.getElementById('delete-lieu-ids');
  const deleteFormuleIds = document.getElementById('delete-formule-ids');
  
  let itemsToDelete = {
    lieus: [],
    formules: []
  };
  
  // Ajouter un nouveau lieu
  addLieuBtn?.addEventListener('click', function() {
    const div = document.createElement('div');
    div.className = 'item-row';
    div.setAttribute('data-type', 'lieu');
    div.innerHTML = `
      <input type="hidden" name="lieu_ids[]" value="">
      <input type="text" name="lieu_names[]" class="item-input" required placeholder="Nom du lieu">
      <div class="item-actions">
        <button type="button" class="btn-item-delete" data-type="lieu" data-name="" title="Supprimer">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
          </svg>
        </button>
      </div>
    `;
    lieusContainer.appendChild(div);
    attachDeleteHandler(div.querySelector('.btn-item-delete'));
  });
  
  // Ajouter une nouvelle formule
  addFormuleBtn?.addEventListener('click', function() {
    const div = document.createElement('div');
    div.className = 'item-row';
    div.setAttribute('data-type', 'formule');
    div.innerHTML = `
      <input type="hidden" name="formule_ids[]" value="">
      <input type="text" name="formule_names[]" class="item-input" required placeholder="Nom de la formule">
      <div class="item-actions">
        <button type="button" class="btn-item-delete" data-type="formule" data-name="" title="Supprimer">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
          </svg>
        </button>
      </div>
    `;
    formulesContainer.appendChild(div);
    attachDeleteHandler(div.querySelector('.btn-item-delete'));
  });
  
  // Attacher les handlers de suppression
  function attachDeleteHandler(btn) {
    btn.addEventListener('click', function() {
      const id = this.getAttribute('data-id');
      const type = this.getAttribute('data-type');
      const name = this.getAttribute('data-name') || 'cet élément';
      
      // Vérifier si c'est un nouvel item (pas encore sauvegardé)
      if (!id) {
        // Supprimer directement de l'interface
        this.closest('.item-row').remove();
        return;
      }
      
      // Ouvrir le modal de confirmation
      openDeleteModal(id, type, name);
    });
  }
  
  // Attacher les handlers aux boutons existants
  document.querySelectorAll('.btn-item-delete').forEach(btn => {
    attachDeleteHandler(btn);
  });
  
  // Ouvrir le modal de suppression
  function openDeleteModal(id, type, name) {
    deleteMessage.textContent = `Êtes-vous sûr de vouloir supprimer "${name}" ?`;
    
    // Vérifier si l'item est utilisé (appel AJAX)
    checkItemUsage(id, type).then(usageInfo => {
      if (usageInfo.isUsed) {
        deleteWarning.style.display = 'block';
        deleteWarningText.textContent = usageInfo.message;
      } else {
        deleteWarning.style.display = 'none';
      }
      
      deleteModal.style.display = 'flex';
      confirmDeleteBtn.onclick = function() {
        // Marquer pour suppression
        if (type === 'lieu') {
          itemsToDelete.lieus.push(id);
          deleteLieuIds.value = itemsToDelete.lieus.join(',');
        } else {
          itemsToDelete.formules.push(id);
          deleteFormuleIds.value = itemsToDelete.formules.join(',');
        }
        
        // Cacher l'élément visuellement
        const itemRow = document.querySelector(`.item-row[data-id="${id}"][data-type="${type}"]`);
        if (itemRow) {
          itemRow.style.opacity = '0.5';
          itemRow.style.textDecoration = 'line-through';
          itemRow.querySelector('.item-input').disabled = true;
          itemRow.querySelector('.btn-item-delete').disabled = true;
        }
        
        closeDeleteModalFunc();
      };
    });
  }
  
  // Vérifier l'utilisation d'un item
  async function checkItemUsage(id, type) {
    try {
      const response = await fetch(`/chef/settings/check-usage/${type}/${id}`);
      const data = await response.json();
      return data;
    } catch (error) {
      console.error('Erreur lors de la vérification:', error);
      return { isUsed: false, message: '' };
    }
  }
  
  // Fermer le modal
  function closeDeleteModalFunc() {
    deleteModal.style.display = 'none';
    deleteWarning.style.display = 'none';
  }
  
  closeDeleteModal?.addEventListener('click', closeDeleteModalFunc);
  cancelDeleteBtn?.addEventListener('click', closeDeleteModalFunc);
  
  // Fermer le modal en cliquant sur l'overlay
  deleteModal?.addEventListener('click', function(e) {
    if (e.target === deleteModal) {
      closeDeleteModalFunc();
    }
  });
});

