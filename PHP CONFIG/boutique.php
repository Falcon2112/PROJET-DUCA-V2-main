<?php

// require("commande.php"); 


//  if(require("connexion.php"))
$access=new pdo("mysql:host=localhost;dbname=duca" , "root", "");

$req=$access->prepare("SELECT * FROM produit ORDER BY id DESC");

$req->execute();

$Produit = $req->fetchAll(PDO::FETCH_ASSOC);


$req->closeCursor();
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Infos pour le navigateur -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BOUTIQUE</title>
    <link rel="stylesheet" href="./style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }
    
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>

</head>

<body>
    <!-- Début du site ici -->
    <header class="d-flex jc-sb ai-c wrap">
        <div>
            <img id="logo" src="../PHP CONFIG/image/yolo3.png" alt="Logo">
        </div>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="boutique.php">BOUTIQUE</a>
            <a href="contact.php">Contact</a>
        </nav>
        <form class="d-flex">
        
                <a href="connexionUser.php">
                <i class="fa-solid fa-user"></i>
            </a>
            </button>
           
            <!-- <button class=" panier"> -->
                <a href="panier.php">
                    <i class="fa-solid fa-bag-shopping"></i>
            </a>
            </button>
           
        </form>
    </header>
<main class="w-1200 m-auto">
        <h1 class="text-c">BOUTIQUE</h1>
 <div class="album py-5 bg-light">
    <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <?php foreach($Produit as $produit): ?> 
      <div clas= "col" >
         <div class="card shadow-sm">

        <!-- row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3
            <article class="col " >     
                 <a href="article 1"> . 
                <div class="card shadow-sm"> -->

                <h3><?= $produit['nom'] ?></h3>
                <img src="<?= $produit['image'] ?>" style="width: 50%">

            <div class="card-body">
                <p class="card-text"><?= substr($produit['description'], 0, 160); ?>...</p>
              <div class="d-flex justify-content-between align-items-center">

                <div class="btn-group">
                  <a href="produit.php?pdt=<?= $produit['id'] ?>">
                  <button type="button" class="btn btn-sm btn-success">Ajouter au Panier</button></a>
                </div>
                <small class="text" style="font-weight: bold;"><?= $produit['prix'] ?> €</small>
            <!-- </article> -->
              </div>
            </div>
         </div>
       </div>
    <?php endforeach; ?>

</div>
</div>
</div>





        <!-- <div class="text-c">
            <a class="btn" href="#">1</a>
            <a class="btn" href="#">2</a>
            <a class="btn" href="#">3</a>
        </div> -->

    </main>
    <div id="mountain">

    </div>

    <footer class="d-flex wrap">

<section class="footer-section mb-1">
    <h3>Suivez-nous</h3>
    <ul>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-tiktok"></i>
</section>

<section class="footer-section">
    <h3>Contact</h3>
    <ol>
        <li>Me Connecter</li>
        <li>Nous Contacter</li>
        
    </ol>
</section>

<section class="footer-section">
    <h3>Mention Legales </h3>
    <ul>
        <li>Mention Legales</li>
        <li>Gestion des Cookies</li>
        <li>Conditions générales d'utilisation</li>
    </ul>
</section>

<div class="w-full">
    <p class="text-c"> &copy; DUCA-Entreprise 2023 </p>
</div>

</footer>
</body>

</html>