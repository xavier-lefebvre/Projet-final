<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        

        </style>
</head>

<body class="bg-dark">
    <!-- navbar with expand class-->
    <nav class="navbar navbar-expand-md navbar-light bg-transparency">
        <div class="container">
            <a href="#intro" class="navbar-brand">
                <span class="fw-bold text-white">
                    Le cinoche </span>
                <i class="bi bi-book-half"></i>
            </a>
            <!-- toggle button for mobile nav-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- BS : collapse class is used for with -->
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="#topics" class="nav-link " >A L'AFFICHE</a>
                    </li>
                    <li class="nav-item">
                        <a href="#reviews" class="nav-link">HORAIRES</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">PROCHAINEMENT</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a href="#pricing" class="nav-link">EVENEMENTS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            INFOS PRATIQUES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Tarifs</a></li>
                            <li><a class="dropdown-item" href="#">Cinéma</a></li>
                            <li><a class="dropdown-item" href="#">Location de salle</a></li>
                            <li><a class="dropdown-item" href="#">Espace CE</a></li>
                            <li><a class="dropdown-item" href="#">Contact</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>