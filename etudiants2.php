<?php
require_once "autoload.php";
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'GET') {
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    try {
        $bdd = new PDO("mysql:host=localhost;dbname=ing22", "root", "");
        
        $result = $bdd->query("select * from etudiant");
        $tab = $result->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($tab); // objet/tableau -> json (string)
    
    }catch(Exception $e) {
        die($e->getMessage());
    }
} elseif ($method == 'POST') {

}
?>
