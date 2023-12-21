<?php

$title = "Panier | La Pizza della Mamma";
?>
<div id="cartpage">

<h3>Votre panier en cours :</h3>
    <?php

    if (isset($_SESSION['cart'])) {
    ?>
        <table id="panier" class="table table-dark m-auto" style="width:40%; background-color:none;">
            <tr>
                <th scope="col">Produit</th>
                <th scope="col">Prix unitaire</th>
                <th scope="col">Quantité</th>
            </tr>


            <?php

            foreach ($_SESSION['cart'] as $item) {

            ?>
                <tr class="pizzaorder">

                    <td><?= $item['nom_pizza'] ?></td>
                    <td><?= $item['prix_pizza'] ?>€</td>
                    <td><?= $item['qte'] ?></td>

                </tr>


            <?php
            }

            ?>
        </table>


        <h3>Total de votre commande : <?= $total ?>€</h3>

       <a href="index.php?controller=client&action=index"><button type="button" class="btn btn-warning">Valider la commande</button></a>
        <a href="index.php?controller=panier&action=resetCart"><button type="button" class="btn btn-warning">Réinitialiser le panier</button></a>

<?php
    } else {

        echo "Le panier est vide.";
    }


?>
</div>