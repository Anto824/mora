<?php
require_once './config/db.php';



function getDatabase() {
    static $db = null;
  
    if ($db == null) {
      $dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=utf8';
      $db = new PDO($dsn, DB_USER, DB_PWD);
  
      // lever une exception si erreur
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
  
    return $db;
  }

  function addMember($identifiant, $password) {
    try {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $bdd = getDatabase();
        $query = $bdd->prepare("INSERT INTO members (identifiant, password_hash) VALUES (:identifiant, :password_hash)");
        $query->execute([
            'identifiant' => $identifiant,
            'password_hash' => $password_hash]);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
function authenticate($identifiant, $password) {
  try {
      $bdd = getDatabase();
      $query = $bdd->prepare("SELECT password_hash FROM members WHERE identifiant = :identifiant");
      $query->bindParam(":identifiant", $identifiant);
      $query->execute();
      $result = $query->fetch();
      if ($result) {
          $password_hash = $result['password_hash'];
          if (password_verify($password, $password_hash)) {
              // successful login
              session_start();
              $_SESSION['identifiant'] = $identifiant;
              return true;
          } else {
              // invalid password
              return false;
          }
      } else {
          // invalid username
          return false;
      }
  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
}


function ConnexionInscription($id,$password){
    $bdd = getDatabase();
    $query = $bdd->prepare("SELECT * FROM members WHERE id = :id");
    $query->execute([
        'id' => $id]);
    $result = $query->rowCount();
    if ($result>0){
        authenticate($id,$password);
    }
    else{
        addMember($id,$password);
    }
}

function ajoutewin($id){
  $bdd = getDatabase();
    $query = $bdd->prepare("UPDATE members SET win = win + 1 WHERE id = :id");
    $query->execute([
        'id' => $id]);
}


function getLeaderboard() {
  try {
      $bdd = getDatabase();
      $query = $bdd->prepare("SELECT identifiant,win FROM members ORDER BY win DESC");
      $query->execute();
      $result = $query->fetchAll();
      return $result;
  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
}

?>