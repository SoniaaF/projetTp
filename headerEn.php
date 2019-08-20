<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">-->    
        <!--<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">-->
        <!--<link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet"> 
        <!--Police pour les titres du site-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
        <title>Institut Picard de Langues</title>
    </head>
    <body>
        <!-- Div pour le parallax -->
        <div class="parallax">
            <!-- Div pour le titre et la navbar -->
            <div class="container-fluid">
                <!-- Drapeau pour la langue française -->
                <a href="anglais.php"><img src="assets/img/en.jpg" class="drapeau" alt="Drapeau anglais, passer le site en anglais"></a>
                <!-- Drapeau pour la langue anglaise -->
                <a href="index.php"><img src="assets/img/fr.jpg" class="drapeau" alt="Drapeau français, passer le site en français"></a>
                <!-- Titre du site -->
                <h1 class="title">Institut Picard de Langues</h1>
                <h1 class="titleMobile">I.P.L France</h1>
                <p class="teachIntro">We teach french and english.</p>
                <hr class="hrMobile">
                <!-- navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand menuMobile text-white">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active hover">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item active hover">
                                <a class="nav-link" href="informations.php">Informations</a>
                            </li>
                            <li class="nav-item active hover">
                                <a class="nav-link" href="test.php">Test</a>
                            </li>
                            <li class="nav-item active hover">
                                <a class="nav-link" href="contact.php">Contact us</a>
                            </li>
                            <li class="nav-item active hover">
                                <a class="nav-link" href="inscription.php">Inscription</a>
                            </li>
                            <li class="nav-item active hover">
                                <a class="nav-link" href="connexion.php">Connection</a>
                            </li>
                        </ul>
                    </div>
                </nav>  
            </div>
            <!-- Div pour la présentation du site -->
            <div class='intro'>
                <p class="introIpl">IPL France</p>
                <p class="introTeach">We teach french and english.</p>
                <hr>
            </div>
        </div>
        <!-- Script -->
        <script src="assets/css/jquery-3.4.0.min.js"></script>
        <script src="assets/css/popper.min.js"></script>
        <script src="assets/css/bootstrap.min.js"></script>
        <script src="main.js"></script>
    </body>
</html>
