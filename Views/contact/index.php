<?php
$title = "Contact | La Pizza della Mamma";
?>

<div class="presentationcontact">
    <h3>Nous contacter</h3>
    <p>Pour toute demande d'information, veuillez nous contacter par téléphone ou via ce formulaire.<br>
        Les réservations s'effectuent uniquement par téléphone.</p>

</div>
<div class="blockform">

    <form id="contactform" action="">

        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="surname" class="col-sm-2 col-form-label">Prénom</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="surname">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="telephone" class="col-sm-2 col-form-label">Tél</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" name="telephone">
            </div>
        </div>
        <div class="row mb-3">
            <label for="demand" class="col-sm-12 col-form-label">Votre demande</label>
            <div class="col-sm-12">
                <textarea name="demand" class="form-control" id="demand" cols="30" rows="10"></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-warning" type="submit">Envoyer</button>
            </div>
        </div>

    </form>

    <div class="contactinfo">
        <p>
        <h5><i>La Pizza della Mamma</i></h5><br>
        15 rue des Lices <br>
        49100, Angers <br>
        </p>
        <p>
            Tel : 02 41 23 34 45
        </p>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2697.1013607978603!2d-0.5565400240633123!3d47.468454197507604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480878c06ae88d29%3A0x12d92079c3d783cc!2s15%20Rue%20des%20Lices%2C%2049100%20Angers!5e0!3m2!1sfr!2sfr!4v1700555765183!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </div>


</div>