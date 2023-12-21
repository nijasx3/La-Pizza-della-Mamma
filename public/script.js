document.getElementById('searchbutton').addEventListener("click", searchPizza);

var xhr = new XMLHttpRequest

function searchPizza() {
    if (document.getElementById("searchForm").checkValidity()) {
        var terme = document.getElementById('terme').value;


        xhr.open('POST', 'index.php?controller=pizza&action=search');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send("terme=" + terme);
        xhr.responseType = 'json';
        xhr.onreadystatechange = function () {

            traitement(foundPizza);
        }
    }
    else {
        alert('Veuillez vérifier les champs ! ');
    }

}
function traitement(foundPizza) {

    if (xhr.readyState == 4 && xhr.status == 200) {

        if (xhr.response) {


            document.getElementById('cartepizza').innerHTML = foundPizza.nom_pizza;

        }
        else {
            reponse = "erreur";
        }
        document.getElementById('reponse').innerHTML = reponse;

    }

}

// AJOUT D'UNE PIZZA AU PANIER!**************************************************************************

var addbutton = document.getElementsByClassName('addCart')
console.log(addbutton);

for (i = 0; i <= addbutton.length; i++) {
    addbutton[i].addEventListener('click', addtoCart);
}

function addtoCart() {

    id_pizza = event.target.parentElement.id;

    console.log(id_pizza);


}

