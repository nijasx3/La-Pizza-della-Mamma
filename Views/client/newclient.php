<?php
$title = "Nouveau client | La Pizza della Mamma";
?>

<h3 class="m-5">Nouveau client :</h3>

<form enctype="multipart/form-data" action="index.php?controller=client&action=createClient" method="POST" class="col-6 m-auto">
<?=$alerte?>
<div class="mb-3">
<label for="nom_client" class="form-label">Nom</label>
<input type="text" class="form-control" name="nom_client">
</div>
<div class="mb-3">
<label for="email_client" class="form-label">Email</label>
<input type="email" class="form-control" name="email_client">
</div>
<div class="mb-3">
<label for="adresse_client" class="form-label">Adresse</label>
<input type="text" class="form-control" name="adresse_client">
</div>
<div class="mb-3">
<label for="mdp" class="form-label">Password</label>
<input type="password" class="form-control" name="mdp">
</div>


<button class="btn btn-primary" type="submit">Valider</button>