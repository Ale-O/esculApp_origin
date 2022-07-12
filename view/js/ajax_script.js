





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









    function ajaxPost(url, data, callback, isJson) {
        var req = new XMLHttpRequest();
        req.open("POST", url);
        req.addEventListener("load", function () {
            if (req.status >= 200 && req.status < 400) {

                callback(req.responseText);
            } else {
                console.error(req.status + " " + req.statusText + " " + url);
            }
        });
        req.addEventListener("error", function () {
            console.error("Erreur réseau avec l'URL " + url);
        });
        if (isJson) {

            req.setRequestHeader("Content-Type", "application/json");

            data = JSON.stringify(data);
        }
        req.send(data);
    }

    var notUse = ""; 

    var idAffectationSupport = listSupportsDropesId[0];

    var dataSend = listSupportsDropesId;


    ajaxPost("index.php?action=sendHypotheseAjaxPost&idAffectationSupport=" + idAffectationSupport + "&dataSend=" + dataSend, notUse, function (reponse) {

            console.log("Les données ont été envoyées au serveur");
        },
        true 
     );



}



