





window.addEventListener("load", function (event) {

  console.log("page chargée");

});












const compare = function (ids, asc) {
  return function (row1, row2) {
    const tdValue = function (row, ids) {
      return row.children[ids].textContent;
    }
    const tri = function (v1, v2) {
      if (v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2)) {
        return v1 - v2;
      }
      else {
        return v1.toString().localeCompare(v2);
      }
      return v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);
    };
    return tri(tdValue(asc ? row1 : row2, ids), tdValue(asc ? row2 : row1, ids));
  }
}

const tbody = document.querySelector('tbody');
const thx = document.querySelectorAll('th');
const trxb = tbody.querySelectorAll('tr');
thx.forEach(function (th) {
  th.addEventListener('click', function () {
    let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));
    classe.forEach(function (tr) {
      tbody.appendChild(tr)
    });
  })
});











function onDragStart(event) {

  event
    .dataTransfer
    .setData('text/plain', event.target.id);




  event
    .currentTarget
    .style
    .backgroundColor = '#f0cfcc';

}



function onDragOver(event) {

  event.preventDefault();

}



function onDrop(event, el) {

  event.preventDefault();

  const id = event
    .dataTransfer
    .getData('text');

  const draggableElement = document.getElementById(id);

  const dropzone = event.target;

  const copyDraggableElement = draggableElement.cloneNode(true);


  el.appendChild(copyDraggableElement);


  copyDraggableElement.classList.add("deletable");




  event
    .dataTransfer
    .clearData();

}









function removeParent(el) {

  var element = el;

  if (element.parentNode.className === "deletable") {
    element.parentNode.remove();

  }

}















function filterSupportsVacants(el) {


  var idElement = el.id;

  var elementDateDebut = document.querySelector('p#p' + idElement + '.dateDebut');

  var elementDateFin = document.querySelector('p#p' + idElement + '.dateFin');

  var listeSupportsVacants = document.getElementById('listeSupportsVacants');



  for (var i = 0; i < listeSupportsVacants.children.length; i++) {

    var idSupport = listeSupportsVacants.children[i].id;

    var supportDateDebut = document.querySelector('p#p' + idSupport + '.dateDebutVacance');

    var supportDateFin = document.querySelector('p#p' + idSupport + '.dateFinVacance');



    if (

      (Date.parse(supportDateFin.innerText) > Date.parse(elementDateDebut.innerText)

        && Date.parse(supportDateDebut.innerText) < Date.parse(elementDateFin.innerText))

    ) {

      listeSupportsVacants.children[i].style.backgroundColor = "#868282";

    }

  }

}




function filterSupports(id) {

  var listeSupportsVacants = document.getElementById('listeSupportsVacants');



  for (var i = 0; i < listeSupportsVacants.children.length; i++) {

    var idSupport = listeSupportsVacants.children[i].id;


    if (idSupport == id) {

      listeSupportsVacants.children[i].style.backgroundColor = "#f0cfcc";

    }

  }


}






function reloadListeSupportsVacants() {

  var listeSupportsVacants = document.getElementById('listeSupportsVacants');

  for (var i = 0; i < listeSupportsVacants.children.length; i++) {

    listeSupportsVacants.children[i].style.backgroundColor = "#FFFFFF";

  }

}








