// Tableau d'objets associant les classes de chaque région à une couleur
const colors = [
  { class: 'region-01', color: 'blue' },
  { class: 'region-02', color: 'green' },
  { class: 'region-03', color: 'red' },
  { class: 'region-04', color: 'yellow' },
  { class: 'region-06', color: 'orange' },
  { class: 'region-11', color: 'magenta' },
  { class: 'region-24', color: 'slategray' },
  { class: 'region-27', color: 'lightseagreen' },
  { class: 'region-28', color: 'peru' },
  { class: 'region-32', color: 'orchid' },
  { class: 'region-44', color: 'darkgoldenrod' },
  { class: 'region-52', color: 'palevioletred' },
  { class: 'region-53', color: 'mediumspringgreen' },
  { class: 'region-75', color: 'sienna' },
  { class: 'region-76', color: 'mediumslateblue' },
  { class: 'region-84', color: 'chocolate' },
  { class: 'region-93', color: 'darkorchid' },
  { class: 'region-94', color: 'plum' }
];


// Parcourez chaque région et ajoutez un gestionnaire d'événements pour le survol
colors.forEach(item => {
  const regions = document.querySelectorAll('.' + item.class);

  regions.forEach(region => {
    region.addEventListener('mouseover', () => {
      region.style.fill = item.color;
    });

    region.addEventListener('mouseout', () => {
      region.style.fill = '';
    });
  });
});


// Sélectionner l'élément conteneur où les informations seront affichées
const infoContainer = document.getElementById('info-container');

// Sélectionner tous les éléments <g> avec la classe "region"
const regions = document.querySelectorAll('g.region');

// Parcourir tous les éléments <g> des régions
regions.forEach(region => {
  // Récupérer le nom et le code INSEE de la région à partir des attributs "data-nom" et "data-code_insee"
  const regionNom = region.getAttribute('data-nom');
  const regionCodeINSEE = region.getAttribute('data-code_insee');
  const regionpop = region.getAttribute('data-pop');
  const regionsu = region.getAttribute('data-su');
  const regionl = region.getAttribute('data-l');
  // Créer un élément <h2> pour afficher le nom et le code INSEE de la région
  const regionHeading = document.createElement('h2');
  regionHeading.textContent = `Région: ${regionNom} (${regionCodeINSEE})`;
  const regionDown = document.createElement('p');
  regionDown.innerHTML = `Population: ${regionpop} <br>
superficie: ${regionsu} <br>
 ${regionl}`;
  // Ajouter un gestionnaire d'événements au clic sur la région
  region.addEventListener('click', () => {
    // Effacer le contenu précédent de l'élément conteneur
    infoContainer.innerHTML = '';

    // Ajouter le titre de la région à l'élément conteneur
    infoContainer.appendChild(regionHeading);

    infoContainer.appendChild(regionDown);
    

    // Sélectionner tous les éléments <path> avec la classe "departement" et appartenant à la région
    const departements = region.querySelectorAll('path.departement');

    // Parcourir tous les éléments <path> des départements de la région
    departements.forEach(departement => {
      // Récupérer le nom et le code INSEE du département à partir des attributs "data-nom" et "data-numerodepartement"
      const departementNom = departement.getAttribute('data-nom');
      const departementCodeINSEE = departement.getAttribute('data-numerodepartement');

      // Créer un élément <p> pour afficher le nom et le code INSEE du département
      const departementParagraph = document.createElement('p');
      departementParagraph.textContent = `Département: ${departementNom} (${departementCodeINSEE})`;

      // Ajouter le paragraphe du département à l'élément conteneur
      infoContainer.appendChild(departementParagraph);
    });
  });
});


