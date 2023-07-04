var nombre = 0;
function add(){
    nombre++;
    document.getElementById("valeur_nombre").textContent = nombre;
    
    document.querySelector("span").innerHTML = "Vous avez cliqué " + nombre + " fois";
}