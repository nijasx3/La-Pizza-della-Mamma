<?php

class Client
{

    private $id_client;
    private $nom_client;
    private $email_client;
    private $mdp_client;
    private $adresse_client;




    /**
     * Get the value of id_client
     */
    public function getId_client()
    {
        return $this->id_client;
    }

    /**
     * Set the value of id_client
     *
     * @return  self
     */
    public function setId_client($id_client)
    {
        $this->id_client = $id_client;

        return $this;
    }

    /**
     * Get the value of nom_client
     */
    public function getNom_client()
    {
        return $this->nom_client;
    }

    /**
     * Set the value of nom_client
     *
     * @return  self
     */
    public function setNom_client($nom_client)
    {
        $this->nom_client = $nom_client;

        return $this;
    }

    /**
     * Get the value of email_client
     */
    public function getEmail_client()
    {
        return $this->email_client;
    }

    /**
     * Set the value of email_client
     *
     * @return  self
     */
    public function setEmail_client($email_client)
    {
        $this->email_client = $email_client;

        return $this;
    }

    /**
     * Get the value of mdp_client
     */
    public function getMdp_client()
    {
        return $this->mdp_client;
    }

    /**
     * Set the value of mdp_client
     *
     * @return  self
     */
    public function setMdp_client($mdp_client)
    {
        $this->mdp_client = $mdp_client;

        return $this;
    }

    /**
     * Get the value of adresse_client
     */
    public function getAdresse_client()
    {
        return $this->adresse_client;
    }

    /**
     * Set the value of adresse_client
     *
     * @return  self
     */
    public function setAdresse_client($adresse_client)
    {
        $this->adresse_client = $adresse_client;

        return $this;
    }
}
