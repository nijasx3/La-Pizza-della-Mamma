<?php
include_once '../Models/PizzaModel.php';
include_once '../Entities/Pizza.php';

class PizzaController extends Controller
{

    public function index()
    {
        $alerte="";
        $pizzaModel = new PizzaModel;
        $listepizza = $pizzaModel->findAll();

        $this->render('pizza/index', ['listepizza' => $listepizza, 'alerte'=>$alerte]);
    }


    public function search()
    {

        if (isset($_POST["terme"]) and !empty($_POST["terme"])) {
            $terme = htmlspecialchars($_POST["terme"]);
            $terme = trim($terme);
            $terme = strip_tags($terme);
            $alerte="";

            $pizzaModel = new PizzaModel;
            $foundPizza = $pizzaModel->findPizza($terme);

            //echo json_encode($foundPizza);

          $this->render('pizza/search', ['foundPizza' => $foundPizza, 'alerte'=>$alerte]);
        }
    }
}
