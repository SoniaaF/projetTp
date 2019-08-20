<?php require_once 'header.php'; ?>
<div class="container-fluid color">
    <!-- Div pour les information de contact avec google map -->
    <div class="row col-6 map">
        <div class="container">
            <p class="text-center Ipl">Institut Picard de Langue</p>
            <p><b>Numéro de téléphone :</b> 00.00.00.00.00</p>
            <p><b>Adresse mail :</b> raphaelvillatte@gmail.com</p>
            <p><b>Adresse :</b> 8 Rue de l'Écuyer, 80000 Amiens, France</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2570.063207874304!2d2.2862048151815233!3d49.89761663492552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e784143fa472f9%3A0x704e3643f940c785!2s8+Rue+de+l&#39;%C3%89cuyer%2C+80000+Amiens!5e0!3m2!1sfr!2sfr!4v1566059279072!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="row col-6">
        <div class="container contact">
            <form id="contact" action="" method="post">
                <fieldset>
                    <legend class="text-center">Formulaire de contact</legend>
                    <div class="form-group">
                        <label for="lastName">Nom :</label>
                        <input type="text" class="form-control" id="lastName" aria-describedby="emailHelp" placeholder="Entrez votre Nom">
                        <label for="firstName">Prénom :</label>
                        <input type="text" class="form-control" id="firstName" aria-describedby="emailHelp" placeholder="Entrez votre Prénom">
                        <label for="email">Adresse mail :</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrez votre email">
                        <label for="topic">Sujet :</label>
                        <input type="email" class="form-control" id="topic" aria-describedby="emailHelp" placeholder="Sujet de votre message">
                        <label for="message">Message :</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                        <small id="emailHelp" class="form-text">Maximum 500 caractères.</small>
                    </div>
                </fieldset>
                <button type="submit" class="btn">Envoyer</button>
                <!--            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>-->
            </form>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <input type="image" src='assets/img/fleche-haut.jpg' width="50px" height="50px" id="rideUp" />
        </div>
    </div>
</div>