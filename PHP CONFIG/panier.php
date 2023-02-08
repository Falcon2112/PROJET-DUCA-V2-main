<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Infos pour le navigateur -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- SEO Ajouter Meta description -->
   <meta name="description" content="Alpha-Seriesest une application qui permet de gérer toutes vos series TV au même endroit .PLanifier le vissionnage dès maintenant ">
   <!-- SEO Titre de l'onglet entre 14 et 44 caractère  -->
   <title>Panier</title>
   <link rel="stylesheet" href="./style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    
    <header class="d-flex jc-sb ai-c wrap mb-1">
        <div>
            <img id="logo" src="../PHP CONFIG/image/yolo3.png" alt="Logo".witdh="168" height="41">
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





    <main>


    
        <form name="ShoppingList">
            <fieldset>
                <legend>Shopping cart</legend>
                <label>Item: <input type="text" name="name"></label>
                <label>Quantity: <input type="text" name="data"></label>
        
                <input type="button" value="Save"   onclick="SaveItem()">
                <input type="button" value="Update" onclick="ModifyItem()">
                <input type="button" value="Delete" onclick="RemoveItem()">
            </fieldset>
            <div id="items_table">
                <h2>Shopping List</h2>
                <table id="list"></table>
                <label><input type="button" value="Clear" onclick="ClearAll()">
                * Delete all items</label>
            </div>
        </form>
        
    </main>


    <div id="mountain">

    </div> 
     <div class="header">

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
        <li>Plus d'Info sur Nous </li>

        
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