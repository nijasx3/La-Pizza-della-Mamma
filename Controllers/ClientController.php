<?php

include '../Models/ClientModel.php';
include '../Entities/Client.php';
include_once '../Core/Validator.php';

class ClientController extends Controller
{

    public function index()
    {
        $alerte = "";

        $this->render('client/login',['alerte'=>$alerte]);
    }


    public function connectClient()
    {

        $clientmodel = new ClientModel;
        $listeClient = $clientmodel->getUser();

        $postemail = $_POST['loginemail'];
        $postpassword = $_POST['loginmdp'];

        if ($postemail != "" && $postpassword != "") {
            $authenticated = false;
            foreach ($listeClient as $value) {

                if (in_array($postemail, $value)) {

                    if (password_verify($postpassword,$value['mdp_client'])) {

                        $authenticated = true;

                        $_SESSION['nom_client'] = $value['nom_client'];
                        $_SESSION['id_client'] = $value['id_client'];
                        $_SESSION['email_client'] = $value['email_client'];
                        $_SESSION['adresse_client'] = $value['adresse_client'];

                    }
                }
            }

            if ($authenticated) {
                $this->render('panier/order');
            } else {
                $alerte = "<div class='alert alert-danger' role='alert'>Mauvais couple login/mdp !</div>";

                $this->render('client/login',['alerte'=>$alerte]);
                
            }
        } else {
            
            $alerte = "<div class='alert alert-danger' role='alert'>Veuillez remplir tous les champs!</div>";

            $this->render('client/login',['alerte'=>$alerte]);
        }
    }

    public function newclient()
    {
        $alerte = "";

        $this->render('client/newclient',['alerte'=>$alerte]);
    }

    public function createClient(){

        $nom = $_POST['nom_client'];
        $email = $_POST['email_client'];
        $mdp = $_POST['mdp'];
        $adresse = $_POST['adresse_client'];
        $post = [$nom, $email, $mdp, $adresse];

        $result = Validator::postCheck($post);


        if ($result == true) {
            $hash = password_hash($mdp, PASSWORD_DEFAULT);
            $client = new Client;
            $client->setNom_client($nom);
            $client->setEmail_client($email);
            $client->setMdp_client($hash);
            $client->setAdresse_client($adresse);

            $clientmodel = new ClientModel;
            $clientmodel->addUser($client);

            $alerte = "<div class='alert alert-success' role='alert'>Inscription prise en compte. Veuillez vous connecter !</div>";

            $this->render('client/login',['alerte'=>$alerte]);
        }
        else{
            $alerte = "<div class='alert alert-danger' role='alert'>Veuillez remplir tous les champs !</div>";
            $this->render('client/newclient',['alerte'=>$alerte]);
        }
    }
}
