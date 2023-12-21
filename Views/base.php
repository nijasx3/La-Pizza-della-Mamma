<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/style.css">


</head>

<body>

    <header>
        <h1 class="text-center">La Pizza della Mamma</h1>
    </header>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <img src="../public/images/dellamammalogo.png" width="10%">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=home&action=index">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=pizza&action=index">Nos pizzas</a>
                    </li>
                    <li class="nav-item form-inline">
                        <a class="nav-link" href="index.php?controller=panier&action=index">Panier</a>
                    </li>
                    <li class="nav-item form-inline">
                        <a class="nav-link" href="index.php?controller=contact&action=index">Contact</a>
                    </li>
                </ul>
                <form id="searchForm" class="d-flex" role="search" action="index.php?controller=Pizza&action=search" method="POST">
                    <input class="form-control me-2" type="search" name="terme" id="terme "placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" id="searchbutton">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <main>
            <?= $content ?>
        </main>
    </div>
    <footer class="text-center">

        <div id="menufooter">
            <ul>
                <li><a href="index.php?controller=home&action=index">Accueil</a></li>
                <li><a href="index.php?controller=pizza&action=index">La carte</a></li>
                <li><a href="index.php?controller=panier&action=index">Panier</a></li>
                <li><a href="index.php?controller=contact&action=index">Contact</a></li>
                <li><a href="#">CGV</a></li>
                <li><a href="#">Mentions légales</a></li>
            </ul>
        </div>
        <div id="copyright">
            Copyright © 2023 | La Pizza della Mamma
        </div>
        <div id="followfooter">
            <p>Suivez nos actualités</p>
            <p>

                <a href="#"><i class="bi bi-facebook"></i> </a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </p>
        </div>


    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>