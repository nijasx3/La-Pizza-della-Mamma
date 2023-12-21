<?php
include_once '../Core/DbConnect.php';

class ClientModel extends DbConnect{

    public function getUser()
    {

        $requete = "SELECT * FROM client";
        $prep = $this->connection->prepare($requete);
        $client = $prep->execute();
        $client = $prep->fetchAll(PDO::FETCH_ASSOC);
        return $client;

    }

    public function addUser(Client $client)
    {

        $nom_client = $client->getNom_client();
        $email_client = $client->getEmail_client();
        $mdp_client = $client-> getMdp_client();
        $adresse_client = $client->getAdresse_client();

        $requete = $this->connection->prepare("INSERT INTO client (nom_client, email_client, mdp_client, adresse_client) VALUES (:nom_client, :email_client, :mdp_client, :adresse_client)");
        $requete->bindParam(':nom_client',$nom_client);
        $requete->bindParam(':email_client',$email_client);
        $requete->bindParam(':mdp_client',$mdp_client);
        $requete->bindParam(':adresse_client',$adresse_client);

        $newclient = $requete->execute();

        return $newclient;


    }

}