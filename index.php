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
                    throw new Exception('Paramètre manquant');
                }
            }
            else{
                if ($_GET['action']=='inscription'){
                    inscription();
                }
                else{
                    if ($_GET['action']=='authentification'){
                        authentification();
                    }
                    else{
                        throw new Exception('Action inconnue');
                    }
                }
            }
        }
    }
    
}
catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}