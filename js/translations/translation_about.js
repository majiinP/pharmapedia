var dataReload = document.querySelectorAll("[data-reload]");

var language = {
    eng:{
        home: "Home",
        language: "Language",
        about: "About",
        legal: "Legal",
        contact: "Contact",

        title: "About us",

        about_text: "Pharmacy (from the Greek φάρμακον 'pharmakon' = drug) is the health profession that links the health sciences with the chemical sciences, and it is charged with ensuring the safe and effective use of medication.",

        about_text_2: "The scope of pharmacy practice includes more traditional roles such as compounding and dispensing medications, and it also includes more modern services related to patient care, including clinical services, reviewing medications for safety and efficacy, and providing drug information. Pharmacists, therefore, are the experts on drug therapy and are the primary health professionals who optimize medication use to provide patients with positive health outcomes. Pharmacy is also the term for an establishment where pharmacy (in the first sense) is practice (synonym: drugstore). The first pharmacy in Europe (still working) was opened in 1241 in Trier, Germany.",

        about_text_3: "The word pharmacy is derived from its root word pharma which was a term used since the 1400–1600s. In addition to pharma responsibilities, the pharma offered general medical advice and a range of services that are now performed solely by other specialist practitioners, such as surgery and midwifery. The pharma (as it was referred to) often operated through a retail shop which, in addition to ingredients for medicines, sold tobacco and patent medicines. The pharmas also used many other herbs not listed.",

        about_text_4: "In its investigation of herbal and chemical ingredients, the work of the pharma may be regarded as a precursor of the modern sciences of chemistry and pharmacology, prior to the formulation of the scientific method.",

        about_text_5: "Welcome to Pharmapendium, your number one source for all informations related to pharmaceutical products. We're dedicated to providing you the very best of pharmaceutical knowledge, with an emphasis on reliability, precision and information.",

        about_text_6: "Founded in 2019 by Pescaru Softwares, pharmapendium has come a long way from its beginnings. When Pescaru Softwares first started out, the passion for world wide pharmaceutical knowledge drove them to start this website.",

        about_text_7: "We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.",
    },

    fr:{
        home: "Accueil",
        language: "Langue",
        about: "À propos",
        legal: "Legal",
        contact: "Contact",

        title: "À propos de nous",

        about_text: "La pharmacie (du grec φάρμακον 'pharmakon' = drogue) est la profession de la santé qui relie les sciences de la santé aux sciences chimiques, et elle est chargée d'assurer l'utilisation sûre et efficace des médicaments.",

        about_text_2: "La portée de la pratique de la pharmacie comprend des rôles plus traditionnels tels que la préparation et la distribution de médicaments, et elle comprend également des services plus modernes liés aux soins aux patients, y compris les services cliniques, l'examen des médicaments pour l'innocuité et l'efficacité, et la fourniture d'informations sur les médicaments. Les pharmaciens sont donc les experts de la pharmacothérapie et les principaux professionnels de la santé qui optimisent l'utilisation des médicaments pour offrir aux patients des résultats positifs pour la santé. La pharmacie est aussi le terme pour un établissement où la pharmacie (au premier sens) est une pratique (synonyme: pharmacie). La première pharmacie en Europe (toujours en activité) a été ouverte en 1241 à Trèves, en Allemagne.",

        about_text_3: "Le mot pharmacie est dérivé de son mot racine pharma qui était un terme utilisé depuis les années 1400-1600. En plus des responsabilités pharmaceutiques, la pharma offrait des conseils médicaux généraux et une gamme de services qui sont désormais fournis uniquement par d'autres praticiens spécialisés, tels que en tant que chirurgie et sage-femme. La pharma (comme on l'appelait) opérait souvent dans un magasin de vente au détail qui, en plus des ingrédients pour les médicaments, vendait du tabac et des médicaments brevetés. Les pharmas utilisaient également de nombreuses autres herbes non répertoriées.",

        about_text_4: "Dans son enquête sur les ingrédients à base de plantes et chimiques, le travail de la pharma peut être considéré comme un précurseur des sciences modernes de la chimie et de la pharmacologie, avant la formulation de la méthode scientifique.",

        about_text_5: "Bienvenue sur Pharmapendium, votre source numéro un pour toutes les informations relatives aux produits pharmaceutiques. Nous nous engageons à vous fournir le meilleur des connaissances pharmaceutiques, en mettant l'accent sur la fiabilité, la précision et l'information.",

        about_text_6: "Fondée en 2019 par Pescaru Softwares, pharmapendium a parcouru un long chemin depuis ses débuts. Lorsque Pescaru Softwares a commencé, la passion pour la connaissance pharmaceutique mondiale les a poussés à créer ce site Web.",

        about_text_7: "Nous espérons que vous apprécierez nos produits autant que nous aimerons vous les offrir. Si vous avez des questions ou des commentaires, n'hésitez pas à nous contacter.",
        
    },

    es:{

        home: "Hogar",
        language: "Idioma",
        about: "Acera de",
        legal: "Legal",
        contact: "Contacto",

        title: "A propósito de nosotros",

        about_text: "La farmacia (del griego φάρμακον 'pharmakon' = droga) es la profesión de la salud que vincula las ciencias de la salud con las ciencias químicas, y se encarga de garantizar el uso seguro y efectivo de los medicamentos.",

        about_text_2: "El alcance de la práctica farmacéutica incluye roles más tradicionales, como la preparación y distribución de medicamentos, y también incluye servicios más modernos relacionados con la atención al paciente, incluidos los servicios clínicos, la revisión de medicamentos para seguridad y eficacia, y el suministro de información sobre medicamentos. Por lo tanto, los farmacéuticos son los expertos en farmacoterapia y los principales profesionales de la salud que optimizan el uso de medicamentos para ofrecer a los pacientes resultados de salud positivos. Farmacia es también el término para un establecimiento donde la farmacia (en el primer sentido) es una práctica (sinónimo: farmacia). La primera farmacia en Europa (todavía en funcionamiento) se abrió en 1241 en Trier, Alemania.",

        about_text_3: "The word pharmacy is derived from its root word pharma which was a term used since the 1400–1600s. In addition to pharma responsibilities, the pharma offered general medical advice and a range of services that are now performed solely by other specialist practitioners, such as surgery and midwifery. The pharma (as it was referred to) often operated through a retail shop which, in addition to ingredients for medicines, sold tobacco and patent medicines. The pharmas also used many other herbs not listed.",

        about_text_4: "En su investigación de ingredientes herbales y químicos, el trabajo de la industria farmacéutica puede verse como un precursor de las ciencias modernas de la química y la farmacología, antes de la formulación del método científico.",

        about_text_5: "Bienvenido a Pharmapendium, su fuente número uno para toda la información farmacéutica. Estamos comprometidos a brindarle lo mejor en conocimiento farmacéutico, con énfasis en la confiabilidad, precisión e información.",

        about_text_6: "Fundado en 2019 por Pescaru Softwares, el farmapendio ha recorrido un largo camino desde su inicio. Cuando comenzó el software Pescaru, la pasión por el conocimiento farmacéutico global los llevó a crear este sitio web.",

        about_text_7: "Esperamos que disfrute de nuestros productos tanto como nos gustaría ofrecerlos. Si tiene alguna pregunta o comentario, no dude en contactarnos.",
    },
};


    if(window.location.hash){
        if(window.location.hash === "#es"){
            document.getElementById("home").innerHTML = language.es.home;
            document.getElementById("language").innerHTML = language.es.language;
            document.getElementById("about").innerHTML = language.es.about;
            document.getElementById("legal").innerHTML = language.es.legal;
            document.getElementById("contact").innerHTML = language.es.contact;
            document.getElementById("title").innerHTML = language.es.title;
            document.getElementById("about_text").innerHTML = language.es.about_text;
            document.getElementById("about_text_2").innerHTML = language.es.about_text_2;
            document.getElementById("about_text_3").innerHTML = language.es.about_text_3;
            document.getElementById("about_text_4").innerHTML = language.es.about_text_4;
            document.getElementById("about_text_5").innerHTML = language.es.about_text_5;
            document.getElementById("about_text_6").innerHTML = language.es.about_text_6;
            document.getElementById("about_text_7").innerHTML = language.es.about_text_7;
        } 
        else if(window.location.hash === "#fr"){
            document.getElementById("home").innerHTML = language.fr.home;
            document.getElementById("language").innerHTML = language.fr.language;
            document.getElementById("about").innerHTML = language.fr.about;
            document.getElementById("legal").innerHTML = language.fr.legal;
            document.getElementById("contact").innerHTML = language.fr.contact;
            document.getElementById("title").innerHTML = language.fr.title;
            document.getElementById("about_text").innerHTML = language.fr.about_text;
            document.getElementById("about_text_2").innerHTML = language.fr.about_text_2;
            document.getElementById("about_text_3").innerHTML = language.fr.about_text_3;
            document.getElementById("about_text_4").innerHTML = language.fr.about_text_4;
            document.getElementById("about_text_5").innerHTML = language.fr.about_text_5;
            document.getElementById("about_text_6").innerHTML = language.fr.about_text_6;
            document.getElementById("about_text_7").innerHTML = language.fr.about_text_7;
        }

        else if(window.location.hash === "#eng"){
            document.getElementById("home").innerHTML = language.eng.home;
            document.getElementById("language").innerHTML = language.eng.language;
            document.getElementById("about").innerHTML = language.eng.about;
            document.getElementById("legal").innerHTML = language.eng.legal;
            document.getElementById("contact").innerHTML = language.eng.contact;
            document.getElementById("title").innerHTML = language.eng.title;
            document.getElementById("about_text").innerHTML = language.eng.about_text;
            document.getElementById("about_text_2").innerHTML = language.eng.about_text_2;
            document.getElementById("about_text_3").innerHTML = language.eng.about_text_3;
            document.getElementById("about_text_4").innerHTML = language.eng.about_text_4;
            document.getElementById("about_text_5").innerHTML = language.eng.about_text_5;
            document.getElementById("about_text_6").innerHTML = language.eng.about_text_6;
            document.getElementById("about_text_7").innerHTML = language.eng.about_text_7;
        };
    };

    for(i = 0; i <= dataReload.length -1; i++){
        dataReload[i].onclick = function(){
            setTimeout(function(){
                window.location.reload(true);
             }, 100);
        };
    }