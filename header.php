<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet"> 
        <!--Police pour les titres du site-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
        <title>Institut Picard de Langues</title>
    </head>
    <body>
        <!-- Div globale -->
        <div class="picture">
            <!-- Div pour le titre et la navbar -->
            <div class="container-fluid">
                <!-- Drapeau pour la langue française -->
                <a href="../../anglais.php"><img src="../../assets/img/en.jpg" class="drapeau" alt="Drapeau anglais, passer le site en anglais"></a>
                <!-- Drapeau pour la langue anglaise -->
                <a href="../../français.php"><img src="../../assets/img/fr.jpg" class="drapeau" alt="Drapeau français, passer le site en français"></a>
                <!-- Titre du site -->
                <div class='responsiveTitle'>
                    <h1 class="title">Institut Picard de Langues</h1>
                    <!-- Titre responsive -->
                    <h1 class="titleMobile">I.P.L France</h1>
                    <p class="teachIntro">We teach french and english.</p>
                    <hr class="hrMobile">
                </div>
                <!-- navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand menuMobile text-white">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active hover">
                                <a class="nav-link" href="../../français.php">Accueil</a>
                            </li>
                            <li class="nav-item active hover">
                                <a class="nav-link" href="../../informations.php">Informations</a>
                            </li>
                            <!-- Bouton Test apparait seulement si l'utilisateur est connecté -->
                            <?php if (isset($_SESSION['user'])) { ?>
                                <li class="nav-item active hover">
                                    <a class="nav-link" href="/views/Test/TestView.php">Test</a>
                                </li>
                            <?php } ?>
                            <li class="nav-item active hover">
                                <a class="nav-link" href="../../contact.php">Nous contacter</a>
                            </li>
                            <li class="nav-item active hover">
                                <a class="nav-link" href="/views/User/addUserForm.php">Inscription</a>
                            </li>
                            <!-- Si l'utilisateur est connecter alors le bouton Connexion devient le bouton Profil -->
                             <?php if (!isset($_SESSION['user'])) { ?>
                            <li class="nav-item active hover">
                                <a class="nav-link" href="/views/User/userLogin.php">Connexion</a>
                            </li>
                             <?php }else{ ?>
                            <li class="nav-item active hover">
                                <a class="nav-link" href="/views/User/profilUser.php">Profil</a>
                            </li>
                             <?php } ?>
                        </ul>
                    </div>
                </nav> 
            </div>
            <!-- Div pour l'image en dessous de la navbar -->
            <div class='pictureResponsive'>
                <img src="../../assets/img/cathedrale.png" alt="">
            </div>
            <!-- Div pour le slogan du site -->
            <div class='intro'>
                <p class="introIpl">IPL France</p>
                <p class="introTeach">We teach french and english.</p>
                <hr>
            </div>
        </div>

