<?php
$title = "Connexion | La Pizza della Mamma"
?>


<div class="row">
    <form class="col-4 m-auto p-5" method="POST" action="index.php?controller=client&action=connectClient">
        <?=$alerte?>
        <div class="mb-3">
            <label for="loginemail" class="form-label">Email address</label>
            <input type="email" class="form-control" name="loginemail" aria-describedby="emailHelp">
           
        </div>
        <div class="mb-3">
            <label for="loginmdp" class="form-label">Password</label>
            <input type="password" class="form-control" name="loginmdp">
            
        </div>
        <div class="mb-3">
         <div class="form-text" id="linknewaccount"><a href="index.php?controller=client&action=newclient">Je n'ai pas de compte.</a></div>
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
        
    </form>
</div>