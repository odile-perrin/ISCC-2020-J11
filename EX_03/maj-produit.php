<?php
function update_line(){
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $databasename = "basetest01";

    try{
        $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "UPDATE produit SET quantite=1 WHERE id=4";
            $sth = $pdo->prepare($sql);
            $sth->execute();
        echo 'Modification réussie';
    }
    catch (PDOException $e){
        echo "Echec de connexion : ". $e->getMessage();
    }
}update_line();
?>