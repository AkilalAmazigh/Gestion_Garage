<?php
    session_start(); //demarage de la session
    require_once("fonctions/fonctions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Garage</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <center>
        <nav class="navbar1 navbar-dark bg-dark">
            </br>
                <h1>Bienvenue sur le site Garage JGCM</h1>
            </br>
            <?php
            if( ! isset($_SESSION['email']))//s'il n'ya pas de session
            {
                require_once("vues/vue_connexion.php");
            }
                if(isset($_POST['SeConnecter']))
            {
                $email = $_POST['email'];
                $mdp = $_POST['mdp'];
                $unUser = selectUser($email, $mdp);
                if($unUser == null)
                {
                    echo "Veuillez vérifier vos identifiants !";
                
                }
                else
                {
                    echo "Bienvenue ".$unUser ['nom']." ".$unUser ['prenom'];
                    //creation de la session user
                    $_SESSION['email'] = $unUser['email'];
                    $_SESSION['nom'] = $unUser['nom'];
                    $_SESSION['prenom'] = $unUser['prenom'];
                    $_SESSION['role'] = $unUser['role'];
                    // on recherge la page vers le home
                    header("Location: index.php?page=0");
                }
            }
            if (isset($_SESSION['email']))
            {
            echo '
                </nav>
                    </br>
                <nav class="navbar navbar-dark bg-dark">
                    <a href="index.php?page=0">
                    <img src="images/home.png" height="40" width="40">
                    </a>
                    <a href="index.php?page=1">
                    <img src="images/client.jpeg" height="40" width="40">
                    </a>
                    <a href="index.php?page=2">
                    <img src="images/vehicule.jpeg" height="40" width="40">
                    </a>
                    <a href="index.php?page=3">
                    <img src="images/technicien.jpeg" height="40" width="40">
                    </a>
                    <a href="index.php?page=4">
                    <img src="images/intervention.jpeg" height="40" width="40">
                    </a>  
                    <a href="index.php?page=5">
                    <img src="images/deconnexion.png" height="40" width="40">
                    </a> 
                </nav>  
                ';

            if(isset($_GET["page"]))
            {
                $page = $_GET["page"];
            }
            else
            {
                $page = 0;
            }
           
            switch ($page)
            {
                        case 0 : require_once("home.php");
                        break;
                        case 1 : require_once("g_client.php");
                        break;
                        case 2 : require_once("g_vehicule.php");
                        break;
                        case 3 : require_once("g_technicien.php");
                        break;
                        case 4 : require_once("g_intervention.php");
                        break; 
                        case 5 :// deconnexion : suppression de  la session
                            session_destroy();
                            header("Location: index.php"); //recherger la page
                        break;       
            }
            }//if de session
            ?>

    </center>
        </br>
        </br>
        </br>
        </br>
        <footer class="bg-dark text-white pt-5 pb-4">

        <div class="container text-center text-md-left">

            <div class="row text-center text-md-left">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold text-warning">Auto Service</h5>
                    <p>Depuis plus de 30 ans  nous vous proposons la solution la mieux adaptée à vos besoins automobiles avec la mise à disposition  de nombreux services.</p>
                    
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold text-warning">Prestations</h5>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;"> Réparation panne</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;"> Vente de pièces</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;"> Rachat de voitures</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;"> Vente d'occasion</a>
                </p>

                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold text-warning">Liens utiles</h5>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;"> Votre compte</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;"> Recurtement</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;"> Aide-FAQ</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;"> Politique de confidentialité</a>
                </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold text-warning" >Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i>Adresse : Bd Sebastopol, 75002, Paris
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>mail : Autoservice@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>tel : +33 606743353
                    </p>
                    <p>
                        <i class="fas fa-print	 mr-3"></i>Fax : +01 335 633 77
                    </p>
                </div>
                
            </div>

        </div>

        </footer>
    
</body>
</html>