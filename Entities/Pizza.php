<?php


class Pizza{

private $id_pizza;
private $nom_pizza;
private $ingredients_pizza;
private $prix_pizza;
private $pic_pizza;





/**
 * Get the value of id_pizza
 */ 
public function getId_pizza()
{
return $this->id_pizza;
}

/**
 * Set the value of id_pizza
 *
 * @return  self
 */ 
public function setId_pizza($id_pizza)
{
$this->id_pizza = $id_pizza;

return $this;
}

/**
 * Get the value of nom_pizza
 */ 
public function getNom_pizza()
{
return $this->nom_pizza;
}

/**
 * Set the value of nom_pizza
 *
 * @return  self
 */ 
public function setNom_pizza($nom_pizza)
{
$this->nom_pizza = $nom_pizza;

return $this;
}

/**
 * Get the value of ingredients_pizza
 */ 
public function getIngredients_pizza()
{
return $this->ingredients_pizza;
}

/**
 * Set the value of ingredients_pizza
 *
 * @return  self
 */ 
public function setIngredients_pizza($ingredients_pizza)
{
$this->ingredients_pizza = $ingredients_pizza;

return $this;
}

/**
 * Get the value of prix_pizza
 */ 
public function getPrix_pizza()
{
return $this->prix_pizza;
}

/**
 * Set the value of prix_pizza
 *
 * @return  self
 */ 
public function setPrix_pizza($prix_pizza)
{
$this->prix_pizza = $prix_pizza;

return $this;
}

/**
 * Get the value of pic_pizza
 */ 
public function getPic_pizza()
{
return $this->pic_pizza;
}

/**
 * Set the value of pic_pizza
 *
 * @return  self
 */ 
public function setPic_pizza($pic_pizza)
{
$this->pic_pizza = $pic_pizza;

return $this;
}
}