let tabasserOUI =  document.querySelector("#tabasserOUI");
let tabasserNON =  document.querySelector("#tabasserNON");
let footer1 = document.getElementById('footer1');
let footer2 = document.getElementById('footer2');
let vieEnnemi = document.getElementById('vieEnnemi');
let vieJoueur = document.getElementById('vieJoueur');
let boutonSecondeAttaque = document.getElementById('boutonSecondeAttaque');
let combat =  document.querySelector("#combat");

tabasserOUI.addEventListener(`click`, function ()
{
    footer1.className = 'footerOFF';
    footer2.className = 'footerON';
})

tabasserOUI.addEventListener(`click`, function ()
{
    vieEnnemi.className = 'vieEnnemiON';
    vieJoueur.className = 'vieJoueurON';
})

tabasserNON.addEventListener(`click`, function ()
{
    console.log("fin de l'interaction")
    combat.className = 'combatOFF';
    window.scroll(myGamePiece.x-window.innerWidth/2,myGamePiece.y-window.innerHeight/2);
})



boutonSecondeAttaque.addEventListener(`click`, function ()
{
    vieEnnemiMax = document.getElementById("vieEnnemiMax").innerHTML;
    vieEnnemiUpdate = document.getElementById("vieEnnemiUpdate").innerHTML;
    vieEnnemiUpdate = vieEnnemiUpdate - document.getElementById("attaqueJoueur").innerHTML;
    document.getElementById("vieEnnemiUpdate").innerHTML = vieEnnemiUpdate;

    if (document.getElementById("vieEnnemiUpdate").innerHTML < 0){
        console.log("let's go")
        combat.className = 'combatOFF';
        window.scroll(myGamePiece.x-window.innerWidth/2,myGamePiece.y-window.innerHeight/2);
    }

    function greet(){
    vieJoueurMax = document.getElementById("vieJoueurMax").innerHTML;
    vieJoueurUpdate = document.getElementById("vieJoueurUpdate").innerHTML;
    vieJoueurUpdate = vieJoueurUpdate - 30
    document.getElementById("vieJoueurUpdate").innerHTML = vieJoueurUpdate;
     }setTimeout(greet, 1000);
})


