<?php
session_start () ;


include "../PHP CONFIG/commande.php";




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Infos pour le navigateur -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

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
        <h1 class="text-c">Connexion</h1>

        
        <div class="wrapper fadeInDown">
            <div id="formContent">
              <!-- Tabs Titles -->
              <h2 class="active"> Sign In </h2>
              <a href="inscription.php">Sign Up</a> 
          
              <!-- Icon -->
              <div class="fadeIn first">
              <i class="fa-solid fa-user"></i>
                <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
              </div>
          
              <!-- Login Form -->
              <form method="post" action="admin.php"> 
                     <!-- action="connexion.php" cest grace a ça ce qu'il y a sure la ligne du haut que ça envoie sur admin.php  -->
            <div class="mb-3">
                <label for="email" class="form-label">Login</label>
                <input type="email" name="email" class="form-control" style="width: 35%;" >
            </div>
            <div class="mb-3">
                <label for="motdepasse" class="form-label">Mot de passe</label>
                <input type="password" name="motdepasse" class="form-control" style="width: 35%;">
            </div>
            <br>
            <input type="submit" name="envoyer" class="btn btn-info" value="Log In">
        </form>
              <!-- <form method="post" >
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="mail">
                <input type="text" id="password" class="fadeIn third" name="motde passe" placeholder="motdepasse">
                <input type="submit" class="fadeIn fourth" name="envoyer" value="Log In">
              </form> -->
          
              <!-- Remind Passowrd -->
              <div id="formFooter">
                <a class="underlineHover" href="./contact.php">Forgot Password?</a>
              </div>
          
            </div>
          </div>

    </main>
    <div id="mountain">

    </div>

    <footer class="d-flex wrap">

        <section class="footer-section">
            <h3>Titre 1</h3>
            <ul>
                <li>Element 1</li>
                <li>Element 2</li>
                <li>Element 3</li>
            </ul>
        </section>

        <section class="footer-section">
            <h3>Titre 2</h3>
            <ol>
                <li>Element 1</li>
                <li>Element 2</li>
                <li>Element 3</li>
            </ol>
        </section>

        <section class="footer-section">
            <h3>Titre 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo repellendus, facere tempora eligendi modi
                sequi obcaecati odit quod omnis natus eveniet doloribus corrupti culpa distinctio aspernatur molestiae
                quae dignissimos. Aliquam?</p>
        </section>

        <div class="w-full">
            <p class="text-c"> &copy; Lorem Ipsum 2022 </p>
        </div>

    </footer>

</body>

</html>

<?php

if(isset($_POST['envoyer']))
{
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse']))
    {
        $email = htmlspecialchars($_POST['email']) ;
        $motdepasse = htmlspecialchar($_POST['motdepasse']);

        $admin = getAdmin($email, $motdepasse);

        if($admin){
            $_SESSION['xRttpHo0greL39'] = $admin;
            header('Location: .admin.php');
        }else{
            echo "réesaye encore"; 
            // header('Location: ../PHP CONFIG/admin.php');
            
        }
    }

}

?>