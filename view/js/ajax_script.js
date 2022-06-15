





function sendHypothesePost(el) {



  var idElement = el.id;
  var elementDropable = document.querySelector('#p'+idElement+'.dropable');

  elementDropable.style.backgroundColor = "#868282";

  var listSupportsDropesId =[];
  listSupportsDropesId.push(idElement);


  for (i = 0 ; i < elementDropable.children.length ; i++)
  {

    elChild = elementDropable.children[i].id;
    elChildId = elChild.split("-");
    console.log(elChildId[1]);

    listSupportsDropesId.push(elChildId[1]);

  }







    // Exécute un appel AJAX POST
    // Prend en paramètres l'URL cible, la donnée à envoyer et la fonction callback appelée en cas de succès
    // Le paramètre isJson permet d'indiquer si l'envoi concerne des données JSON

    function ajaxPost(url, data, callback, isJson) {
        var req = new XMLHttpRequest();
        req.open("POST", url);
        req.addEventListener("load", function () {
            if (req.status >= 200 && req.status < 400) {
                // Appelle la fonction callback en lui passant la réponse de la requête
                callback(req.responseText);
            } else {
                console.error(req.status + " " + req.statusText + " " + url);
            }
        });
        req.addEventListener("error", function () {
            console.error("Erreur réseau avec l'URL " + url);
        });
        if (isJson) {
            // Définit le contenu de la requête comme étant du JSON
            req.setRequestHeader("Content-Type", "application/json");
            // Transforme la donnée du format JSON vers le format texte avant l'envoi
            data = JSON.stringify(data);
        }
        req.send(data);
    }

    var notUse = ""; // non utilisé pour le moment -> impossible de recupérer la variable data côté php dans le fronted

    var idAffectationSupport = listSupportsDropesId[0];

    var dataSend = listSupportsDropesId;


    ajaxPost("index.php?action=sendHypotheseAjaxPost&idAffectationSupport=" + idAffectationSupport + "&dataSend=" + dataSend, notUse, function (reponse) {

            console.log("Les données ont été envoyées au serveur");
        },
        true // Valeur du paramètre isJson
     );



}



