<?php

$title = "Carte des Pizzas | La Pizza della Mamma";
?>


<div class="presentationcarte">
    <h3>La carte des Pizzas</h3>

    <p>Bienvenue dans l'univers exquis de "La Pizza della Mamma", où chaque création incarne l'essence de l'Italie et où l'art de la pizza prend vie avec passion et raffinement. Découvrez notre sélection unique de pizzas, cuites au feu de bois, qui allient tradition, qualité et une touche contemporaine pour une expérience gustative incomparable.</p>

    <?= $alerte ?>
</div>

<div id="cartepizza" class="row justify-content-center align-top">
    <?php

    foreach ($listepizza as $pizza) {

    ?>

        <div class="pizzashow col-4" id="<?= $pizza->id_pizza ?>">
            <form action="index.php?controller=panier&action=addCart" method="POST">
                <img src="<?= $pizza->pic_pizza ?>">
                <ul>
                    <li class="nompizza">
                        <h5><?= $pizza->nom_pizza ?></h5>
                    </li>

                    <li class="compopizza"><?= $pizza->ingredients_pizza ?></li>
                    <li class="prixpizza">
                        <h5><?= $pizza->prix_pizza ?>€</h5>
                    </li>
                </ul>
                <input type="number" name="qte" value="1" min="1">
                <input type="hidden" name="id_pizza" value="<?= $pizza->id_pizza ?>">
                <input type="hidden" name="nom_pizza" value="<?= $pizza->nom_pizza ?>">
                <input type="hidden" name="prix_pizza" value="<?= $pizza->prix_pizza ?>">


                <button type="submit" class="addCart btn btn-warning">Sélectionner</button>
            </form>
        </div>




    <?php



    }

    ?>
</div>