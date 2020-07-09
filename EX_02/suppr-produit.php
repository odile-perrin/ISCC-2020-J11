<?php
function delete_line(){
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $databasename = "basetest01";

    try{
        $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "DELETE FROM produit WHERE nom='T-shirt noir'";
                $sth = $pdo->prepare($sql);
                $sth->execute(); 
        echo 'Supression réussie';
    }
    catch (PDOException $e){
        echo "Echec de connexion : ". $e->getMessage();
    }
}delete_line();
?>