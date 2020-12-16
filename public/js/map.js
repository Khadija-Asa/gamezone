document.addEventListener('DOMContentLoaded', function() { //On check quand le HTML sera complètement chargé


  /***************************SERVICES****************************/
    document.querySelector('#servicesCheckbox').addEventListener('click', () => { //On met un event Listener click sur la checkbox des services
        document.querySelectorAll('#services').forEach( e => { //On boucle tous les marqueurs qui ont l'id services
            if (e.style.display === "none") { //Si leur style display est à "none"
                e.style.display = "block"; //On les affiche en mettant un display: block
            } else {
                e.style.display = "none";
            }
        });
    });

    document.querySelector('#restaurantsCheckbox').addEventListener('click', () => { 
        document.querySelectorAll('#restaurants').forEach( e => { 
            if (e.style.display === "none") { 
                e.style.display = "block"; 
            } else {
                e.style.display = "none";
            }
        });
    });

    document.querySelector('#shopsCheckbox').addEventListener('click', () => { 
        document.querySelectorAll('#shops').forEach( e => { 
            if (e.style.display === "none") { 
                e.style.display = "block"; 
            } else {
                e.style.display = "none";
            }
        });
    });

    document.querySelector('#photosCheckbox').addEventListener('click', () => { 
        document.querySelectorAll('#photos').forEach( e => { 
            if (e.style.display === "none") { 
                e.style.display = "block"; 
            } else {
                e.style.display = "none";
            }
        });
    });


    /************************TAILLES MINIMUM**************************************/

    //Déclaration des tableaux selon la taille minimum. Les éléments du tableau doivent correspondre à la classe qui leur est attribuée sur le css. Ca servira à les cibler plus tard
    let moreThan130 = [
      'awesomeHeroes',//130
      'contagionVR', //130
      'fighter'//130
    ]

    let between110and130 = [
      'championsLeagueSurvivor',//110
      'superFighter',//110
    ]

    let lessThan110= [
      'battleKart',//0
      'championsLeague',//0
      'gameCenter',//0
      'heroesTeam',//0
    ]

    document.querySelector('#tall0').addEventListener('click', () => { //Plus d'1m30, toutes les attractions doivent s'afficher
      moreThan130.forEach(e => { //On boucle sur le tableau des attractions de plus de 130cm
        let element = document.querySelector('.'+e); //On cible l'élément dans le DOM par rapport à sa classe
        element.style.display = "block"; //On lui met un display. Comme la condition demande de tout afficher, on applique un display block aux 3 tableaux
      });
      between110and130.forEach(e => {
        let element = document.querySelector('.'+e);
        element.style.display = "block"; 
      });
      lessThan110.forEach(e => {
        let element = document.querySelector('.'+e);
        element.style.display = "block"; 
      });
    });

    document.querySelector('#tall2').addEventListener('click', () => { //Moins d1m30, mais plus d'1m10, les attractions de plus de 1m30 doivent être cachées
    moreThan130.forEach(e => {
      let element = document.querySelector('.'+e);
      element.style.display = "none"; 
    });
    between110and130.forEach(e => {
      let element = document.querySelector('.'+e);
      element.style.display = "block"; 
    });
    lessThan110.forEach(e => {
      let element = document.querySelector('.'+e);
      element.style.display = "block"; 
    });
    });

    document.querySelector('#tall1').addEventListener('click', () => { //Moins d'1m10, seules les attractions sans prérequis de taille doivent s'afficher
      lessThan110.forEach(e => {
        let element = document.querySelector('.'+e);
        element.style.display = "block"; 
      });
      between110and130.forEach(e => {
        let element = document.querySelector('.'+e);
        element.style.display = "none"; 
      });
      moreThan130.forEach(e => {
        let element = document.querySelector('.'+e);
          element.style.display = "none"; 
      });
    });
});
