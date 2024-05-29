<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <nav
        class="navbar navbar-expand-sm navbar-dark bg-info"
    >
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="?page=accueil" aria-current="page"
                            >Accueil</a
                        >
                    </li>
                    <?php if(!isset($_SESSION["prenom"])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=inscription">Inscription</a>
                    </li>
                       <li>
                           <a class="nav-link" href="?page=classe">Classes</a>
                       </li> 
                    <?php endif; ?>
                    <?php if(isset($_SESSION["prenom"])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=deconnexion">Deconnexion</a>
                    </li>
                    <?php endif; ?>
                   
                </ul>
            </div>
        </div>
    </nav>