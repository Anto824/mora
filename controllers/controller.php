<?php

require_once './models/models.php';


function mora(){
    require_once './views/mora.php';
}

function morafin($gagnant){
    ajouterGagnant($gagnant);
    require_once './views/morafin.php';
}

function inscription($id,$password){
    ConnexionInscription($id,$password);
    require_once './views/mora.php';
}

function voirLeaderboard(){
    $leaderboard = getLeaderboard();
    require_once './views/leaderboard.php';
}    

function accueil(){
    require_once './views/accueil.php';
}


?>