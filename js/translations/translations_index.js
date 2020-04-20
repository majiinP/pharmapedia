var dataReload = document.querySelectorAll("[data-reload]");

var language = {
    eng:{
        home: "Home",
        language: "Language",
        about: "About",
        legal: "Legal",
        contact: "Contact",

        welcome: "Welcome to Pharmacompendium",

        text_input: "The #1 drug online encyclopedic compendium. This app filters and lists all of the current used medications. Simply select one of the alphabetical letters to begin your search and then scroll for your specific drug of choice."
    },

    fr:{
        home: "Accueil",
        language: "Langue",
        about: "À propos",
        legal: "Legal",
        contact: "Contact",

        welcome: "Bienvenue à Pharmacompendium",

        text_input: "Recueil encyclopédique en ligne sur les médicaments n ° 1. Cette application filtre et répertorie tous les médicaments actuellement utilisés. Sélectionnez simplement l'une des lettres alphabétiques pour commencer votre recherche, puis faites défiler jusqu'au medicament de votre choix."
        
    },

    es:{

        home: "Hogar",
        language: "Idioma",
        about: "Acera de",
        legal: "Legal",
        contact: "Contacto",

        welcome: "Bienvenido a Pharmacompendium",

        text_input: "El compendio enciclopédico en línea de drogas # 1. Esta aplicación filtra y enumera todos los medicamentos usados ​​actuales. Simplemente seleccione una de las letras alfabéticas para comenzar su búsqueda y luego desplácese por su medicamento específico de elección."
    },
};


    if(window.location.hash){
        if(window.location.hash === "#es"){
            document.getElementById("home").innerHTML = language.es.home;
            document.getElementById("language").innerHTML = language.es.language;
            document.getElementById("about").innerHTML = language.es.about;
            document.getElementById("legal").innerHTML = language.es.legal;
            document.getElementById("contact").innerHTML = language.es.contact;
            document.getElementById("welcome").innerHTML = language.es.welcome;
            document.getElementById("paragraph").innerHTML = language.es.text_input;
        } 
        else if(window.location.hash === "#fr"){
            document.getElementById("home").innerHTML = language.fr.home;
            document.getElementById("language").innerHTML = language.fr.language;
            document.getElementById("about").innerHTML = language.fr.about;
            document.getElementById("legal").innerHTML = language.fr.legal;
            document.getElementById("contact").innerHTML = language.fr.contact;
            document.getElementById("welcome").innerHTML = language.fr.welcome;
            document.getElementById("paragraph").innerHTML = language.fr.text_input;
        }

        else if(window.location.hash === "#eng"){
            document.getElementById("home").innerHTML = language.eng.home;
            document.getElementById("language").innerHTML = language.eng.language;
            document.getElementById("about").innerHTML = language.eng.about;
            document.getElementById("legal").innerHTML = language.eng.legal;
            document.getElementById("contact").innerHTML = language.eng.contact;
            document.getElementById("welcome").innerHTML = language.eng.welcome;
            document.getElementById("paragraph").innerHTML = language.eng.text_input;
        };
    };

    for(i = 0; i <= dataReload.length -1; i++){
        dataReload[i].onclick = function(){
            setTimeout(function(){
                window.location.reload(true);
             }, 100);
        };
    }