<form action="#" method="post" >
    NOM <input name="NOM" ><br/>
    PRENOM <input name="PRENOM" ><br/>
    NE(E) LE <input type="date" name="DATE" ></br>
    <input type="submit" name="AJOUTER" value="AJOUTER" >
</form>
<?php
if (isset($_POST['AJOUTER'])){
    $nom = $_POST['NOM'] ?? "";
    $prenom = $_POST['PRENOM'] ?? "";
    $date = $_POST['DATE'];
    $bdd = new PDO("mysql:host=localhost;dbname=ing22", "root", "");

    $req = $bdd->prepare("INSERT INTO ETUDIANT VALUES (null, ?, ?, ?)");
    $req->execute([$nom, $prenom, $date]);
    echo "ETUDIANT AJOUTE AVEC SUCCES";

}