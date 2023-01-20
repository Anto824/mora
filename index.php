<?php

ini_set('error_reporting', E_ALL); ini_set('display_errors', 1); ini_set('display_startup_errors', 1);  

require_once 'controllers/controller.php';

try {
    if (isset($_GET['action'])){
        if ($_GET['action'] == 'mora'){
            mora();
        }
        else{
            if ($_GET['action']=='morafin'){
                if (isset($_GET['gagnant'])){
                    morafin($_GET['gagnant']);
                }
                else{
                    throw new Exception('Gagnant non défini');
                }
            }
            else{
                if ($_GET['action']=='inscription'){
                    ConnexionInscription($_POST['user_name'],$_POST['user_password']);
                }
                    else{
                        throw new Exception('Action inconnue');
                    }
                }
            }
        }
        else{
            throw new Exception('Paramètre manquant');
        }
    }
    else {
        accueil();
    }
    

catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

?>