var cartes;//nos cartes 

function initCartes(nombreCartes) 
{ 
cartes=new Array(); 
for(var n=0;n<nombreCartes;n++)cartes.push(n+1);//nos cartes de 1 à nombreCartes dans un Array de 0 à nombreCartes-1; 
} 

function tirage()//pour choisir une carte 
{ 
if(cartes.length==0){alert("Le paquet est vide");return -1;} 
var p=Math.floor(Math.random()*cartes.length);//une carte au hasard 
var carte=cartes[p];//le contenu de la carte 
cartes.splice(p,1);//on enlève la carte du paquet 
return carte;//on retourne la carte tirée au sort (et il ne reste plus dans le paquet que les cartes restantes) 
} 

function test() 
{ 
var NombreCartes=12;//on choisi le nombre de cartes voulues (ici 32) 

initCartes(NombreCartes);//on initialise le paquet	

for(var n=0;n<NombreCartes;n++)alert(tirage()+"\n"+cartes);//on tire au sort les 32 cartes 

tirage();//pour montrer qu'on a bien vidé le paquet 
} 

test();