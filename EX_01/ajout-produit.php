<?php
function connect_to_database(){
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $databasename = "basetest01";

try{
    $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO produit(id, nom, description, prix, quantite)
    VALUES (8, 'T-shirt noir', 'T-shirt coton de couleur noire', 15.50, 10)";
    $pdo->exec($sql);
    echo "Ajout réussi";
}
catch (PDOException $e){
    echo "Echec de connexion : ". $e->getMessage();
}
}
connect_to_database();
?>