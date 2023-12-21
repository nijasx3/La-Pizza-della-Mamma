<?php

include_once '../Core/DbConnect.php';


class PizzaModel  extends DbConnect
{


    public function findAll()
    {

        $request = "SELECT * FROM pizza";
        $prep = $this->connection->prepare($request);
        $liste = $prep->execute();
        $liste = $prep->fetchAll();
        return $liste;
    }


    public function findPizza($terme)
    {

        $request = "SELECT * FROM pizza WHERE nom_pizza LIKE '%$terme%' OR ingredients_pizza LIKE '%$terme%'";
        $prep = $this->connection->prepare($request);
        $foundPizza = $prep->execute();
        $foundPizza = $prep->fetchAll();
        return $foundPizza;

    }

    public function selectPizza($id_pizza){
        $request = "SELECT * FROM pizza WHERE id_pizza = '$id_pizza'";
        $prep = $this->connection->prepare($request);
        $selectedPizza = $prep->execute();
        $selectedPizza = $prep->fetch();
        return $selectedPizza;

    }

}
