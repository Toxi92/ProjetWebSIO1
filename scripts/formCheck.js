document.getElementById('case_cochable').addEventListener('change', function() {
    const content = document.getElementById('Contient_formulaire');
    const form_case = document.getElementById('formulaire_check');
    const tableauChamp = document.getElementById('tableau');
    if (!this.checked) {
        content.classList.remove('visible');
        content.classList.add('cacher');
        form_case.style.top="10px";
    } else {
        content.classList.remove('cacher');
        content.classList.add('visible');
        form_case.style.top="130px";
    }
});