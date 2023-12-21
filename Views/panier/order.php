<?php
$title = "Commande | La Pizza della Mamma"
?>


<div class="row">
    <div class="col-6">
        <h3 style="text-align:center;margin:2%;">Récapitulatif de votre commande</h3>
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


        <h5 style="text-align:center; margin:2%;">Total de votre commande : <?= array_sum($_SESSION['total']) ?>€</h5>


        <div class="accordion col-6 m-auto">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Un code promo ?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <label for="codepromo">Code promo : </label>
                        <input type="text" name="codepromo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <h5 style="margin-top:2%;">Adresse de facturation</h5>


        <?= $_SESSION['nom_client'] ?><br>
        <?= $_SESSION['email_client'] ?><br>
        <?= $_SESSION['adresse_client'] ?><br><br>


        <h5>Paiement</h5>
        <div class="mb-3 col-5">
            <label for="cb" class="form-label">Numéro CB</label>
            <input type="text" class="form-control" name="cb">
        </div>
        <div class="mb-3 col-2">
            <label for="expdate" class="form-label">Date d'expiration</label>
            <input type="date" class="form-control" name="expdate">
        </div>
        <div class="mb-3 col-2">
            <label for="cvc" class="form-label">CVC</label>
            <input type="text" class="form-control" name="cvc">
        </div>


        <button class=" btn btn-warning">Payer et commander</button>
    </div>
</div>