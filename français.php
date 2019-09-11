<?php 
session_start();
require_once 'header.php'; ?>
<div class='container'>
    <!-- Photo de l'association -->
    <div class='img'>
        <img class='assoc' src="assets/img/classe.jpg" alt="photo de l'association"> 
    </div>
    <!-- Présentation de l'association -->
    <div class='presentations'>
        <p>PRESENTATION ASSOCIATION :</p>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, tempora, officia quibusdam dolore praesentium qui quisquam id molestias eos nemo aspernatur sapiente eveniet velit dolores aliquid. Optio, tempore voluptatem eos?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, rem, vero, optio blanditiis delectus porro ut accusantium iusto enim neque cum libero dolorem recusandae! Possimus, facilis quo perspiciatis assumenda in.</p>
    </div>
    <!-- Photo des intervenants -->
    <div class='img'>
        <img class='assoc' src="assets/img/classe.jpg" alt="photo des intervenants de l'association"> 
    </div>
    <!-- Présentation des intervenants -->
    <div class='presentations'>
        <p>PRESENTATION INTERVENANTS :</p>
        <p> Monsieur Villate Raphael : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, tempora, officia quibusdam dolore praesentium qui quisquam id molestias eos nemo aspernatur sapiente eveniet velit dolores aliquid. Optio, tempore voluptatem eos?</p>
        <p> Madame Sezer Sheniz : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, rem, vero, optio blanditiis delectus porro ut accusantium iusto enim neque cum libero dolorem recusandae! Possimus, facilis quo perspiciatis assumenda in.</p>
    </div>
</div>
<!-- Input de la flèche qui sert à remonté -->
<input type="image" src='assets/img/fleche-haut.jpg' width="50px" height="50px" id="rideUp" />
<?php require_once 'footer.php'; ?>