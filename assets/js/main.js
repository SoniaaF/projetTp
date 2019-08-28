// Fonction pour la flèche qui sert à remonté en haut de la page
$(function(){
	$("#rideUp").click(function(){
    	$("html, body").animate({scrollTop: 0},"slow");
    });
});