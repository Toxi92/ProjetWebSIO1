window.onload = function() {
  if (!localStorage.getItem('pageReloaded')) {
      localStorage.setItem('pageReloaded', 'true');
      window.location.reload(true);
  } else {
      localStorage.removeItem('pageReloaded');
  }
};

path1='./Styles/fiche_style1.css';
path2='./Styles/fiche_style2.css';

// Lors du chargement de la page, vérifier le thème stocké dans le localStorage
document.addEventListener('DOMContentLoaded', function () {
    const themeStyle = document.getElementById('Style_Theme');
    const savedTheme = localStorage.getItem('theme');

    if (savedTheme) {
        themeStyle.setAttribute('href', savedTheme);
    }
});

// Changer le style lors de la soumission du formulaire
document.getElementById('formulaire_theme').addEventListener('submit', function (e) {
    e.preventDefault(); // Empêche le rechargement de la page
    const selectedTheme = document.querySelector('input[name="Theme"]:checked').value;
    const themeStyle = document.getElementById('Style_Theme');
    if (selectedTheme === 'ThemeClair') {
        
        themeStyle.setAttribute('href', path2 ); // Chemin vers le thème clair
        localStorage.setItem('theme',path2 ); // Enregistre le thème
        location.reload(true);
    } else {
        themeStyle.setAttribute('href', path1 ); // Chemin vers le thème sombre
        localStorage.setItem('theme', path1); // Enregistre le thème
        location.reload(true);
    }
});