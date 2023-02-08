<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Infos pour le navigateur -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>
    <!-- Début du site ici -->
    <header class="d-flex jc-sb ai-c wrap">
        <div>
            <img id="logo" src="../PHP CONFIG/image/yolo3.png" alt="Logo">
        </div>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="Boutique.php">BOUTIQUE</a>
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
        <h1 class="text-c">Contact</h1>

<!--
Question : 
https://openclassrooms.com/forum/sujet/formulaire-de-contact-responsive²
-->
<div class="container">
    <h1>Formulaire de contact</h1>
    <form action="..PHP CONFIG/formulairecontact.php" method="POST">
        
        <label for="fname">Nom & prénom</label>
        <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">
        
      <label for="sujet">Sujet</label>
      <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">
  
      <label for="emailAddress">Email</label>
      <input id="emailAddress" type="email" name="email" placeholder="Votre email">
  
  
      <label for="subject">Message</label>
      <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>
  
      <input type="submit" value="Envoyer">
    </form>
  </div>
  

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