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
    
}

function authentification(){
    
}

?>