<?php
   require_once "etudiant.php";

use Dz\Etm\Formation\Models\Etudiant;


?>
<a href="ajouter.php">NOUVEL ETUDIANT</a>
<table border="1">
    <tr>
        <th>CODE</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>DATE NAISSANCE</th>
        <th>ACTIONS</th>
    </tr>

<?php
// table>tr>th*6

try {
    $bdd = new PDO("mysql:host=localhost;dbname=ing22", "root", "");
    
    $result = $bdd->query("select * from etudiant");

    while($etudiant = $result->fetchObject('Dz\Etm\Formation\Models\Etudiant')) {
        echo "<tr><td>{$etudiant->id}</td><td>{$etudiant->nom}</td>";
        echo "<td>{$etudiant->prenom}</td><td>{$etudiant->date_naissance}</td>";
        echo "<td><a href='modifier.php?id={$etudiant->id}'>MODIFIER</a></td></tr>";
    }

    // $liste = $result->fetchAll(PDO::FETCH_NUM);// FETCH_BOTH = FETCH_ASSOC + FETCH_NUM

    // foreach($liste as $etudiant) {
    //     echo "<tr>";
    //     foreach($etudiant as $champ) echo "<td>$champ</td>";
    //     echo "<td><a href='modifier.php?id={$etudiant[0]}'>MODIFIER</a></td>";
    //     echo "</tr>";
    //     // echo "<tr><td>{$etudiant[0]}</td><td>{$etudiant['nom']}</td>";
    //     // echo "<td>{$etudiant['prenom']}</td><td>{$etudiant['date_naissance']}</td>";
    //     // echo "<td><a href='modifier.php?id={$etudiant['id']}'>MODIFIER</a></td></tr>";
    // }

}catch(Exception $e) {
    die($e->getMessage());
}
?>
</table>