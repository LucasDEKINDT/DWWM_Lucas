// DOM
//permet de crée un tableau touches avec la class bouton
const touches = [...document.querySelectorAll('.bouton')];
//la fonction map permet de parcourir les touches et de faire des opération pour envoyer vers dataset.key
const listeKeycode = touches.map(touche => touche.dataset.key);
// selectioner la class ecran
const ecran = document.querySelector('.ecran');
// quand on appuie sur une touche du clavier cela prend la valeur keycode de la touche pour effectuer le calcul 
document.addEventListener('keydown', (e) => {
    const valeur = e.keyCode.toString();
    calculer(valeur)

})
// quand le click est effectuer alors la valeur de la touche est mise dans la fonction flécler (e) pour pointer dataset.key
document.addEventListener('click', (e) => {
    const valeur = e.target.dataset.key;
    //pour chaque evenement le calcul est effectuer 
    calculer(valeur)

})

const calculer = (valeur) => {
    if (listeKeycode.includes(valeur)) {
        // si on appui sur 46 alors le calcul est reset 
        switch (valeur) {
            case '46':
                ecran.textContent = "";
                break;
                // si on appui sur 13 alors le calcul est effectuer
            case '13':
                const calcul = eval(ecran.textContent);
                ecran.textContent = calcul;
                break;
            default:
                // pour continuer le calcul en cour 
                const indexKeycode = listeKeycode.indexOf(valeur);
                const touche = touches[indexKeycode];
                ecran.textContent += touche.innerHTML;
        }
    }
}
// si on met des symboles d'operation de suite alors un message d'erreur est afficher 
window.addEventListener('error', (e) => {
    alert('Une erreur est survenue dans votre calcul : ' + e.message)
})