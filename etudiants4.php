<?php
    header('Content-Type:text/xml'); // MIME
    require_once "autoload.php";
?>
<ecole>
<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=ing22", "root", "");   
    $result = $bdd->query("select * from etudiant");

    while($etudiant = $result->fetchObject('Etudiant')) {
        echo "<etudiant><id>{$etudiant->id}</id><nom>{$etudiant->nom}</nom></etudiant>";
    }
}catch(Exception $e) {
    die($e->getMessage());
}
?>
</ecole>