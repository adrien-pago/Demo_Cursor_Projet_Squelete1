import '../styles/manage-meals.scss';
import '../../shared/js/base.js';

// Tri automatique : plats sélectionnés en haut
function sortSelectedItems() {
    document.querySelectorAll('.list-group').forEach(list => {
        const items = Array.from(list.children);
        items.sort((a, b) => {
            const aChecked = a.querySelector('input[type="checkbox"]').checked;
            const bChecked = b.querySelector('input[type="checkbox"]').checked;
            if (aChecked && !bChecked) return -1;
            if (!aChecked && bChecked) return 1;
            return 0;
        });
        items.forEach(item => list.appendChild(item));
    });
}

document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', sortSelectedItems);
});

// Initialiser le tri au chargement
sortSelectedItems();

