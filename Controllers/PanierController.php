<?php
include_once '../Models/PizzaModel.php';




class PanierController extends Controller
{


    public function index()
    {

        if (isset($_SESSION['cart'])) {
            $alerte = "";

            $total = array_sum($_SESSION['total']);

            $this->render('panier/index', ['session' => $_SESSION, 'total' => $total, 'alerte' => $alerte]);
        } else {
            $alerte = "";
            $this->render('panier/index', ['alerte' => $alerte]);
        }
    }

    public function addCart()
    {

        if (isset($_POST)) {

            if (!isset($_SESSION['cart'])) {

                $_SESSION['cart'] = [];
                $_SESSION['total'] = [];
            }

            // ajout au panier de l'article
            $_POST['nom_pizza'];
            $_POST['prix_pizza'];
            $_POST['qte'];

            array_push($_SESSION['cart'], $_POST);

            // calcul du prix total 
            $prix = $_POST['prix_pizza'];
            $qte = $_POST['qte'];

            $prixint = floatval($prix);
            $qteint = floatval($qte);
            array_push($_SESSION['total'], $prixint * $qteint); //calcul du prix de chaque ligne rentrée dans le tableau
            // chaque produit rentre dans le tableau total

            $total = array_sum($_SESSION['total']); // somme de toutes les entrées (les produits de qte*prix)

            // redirection vers la liste des pizzas

            $pizzaModel = new PizzaModel;
            $listepizza = $pizzaModel->findAll();
            $alerte = "<div class='alert alert-success' role='alert'> Produit ajouté au panier !</div>";

            $this->render('pizza/index', ['listepizza' => $listepizza, 'total' => $total, 'alerte' => $alerte]);
        } else {
            echo 'erreur';
        }
    }

    public function resetCart()
    {

        if (isset($_SESSION)) {

            session_unset();

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function order()
    {


        $this->render('panier/order');
    }
}
