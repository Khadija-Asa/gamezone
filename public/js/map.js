document.addEventListener('DOMContentLoaded', function() { //On check quand le HTML sera complètement chargé

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

});
