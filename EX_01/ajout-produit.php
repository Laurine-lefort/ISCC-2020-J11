<?php

function connect_to_database() {    
    $servername = "localhost"; 
    $username = 'root';    
     $password = 'root'; 
     $databasename = "basetest01"; 
 try {      
       $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);  
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
               
        echo "Connected successfully<br/>";   
        
        $sql = "INSERT INTO produit(id, nom,description,prix,quantité)
        VALUES(8,'T-shirt noir','T-shirt coton de couleur noire',15.50,10)";

        $pdo->exec($sql);
        echo'Entrée ajoutée à la table';    
       } 
       catch (PDOException $e) 
       {        
            echo "Connection failed : ". $e->getMessage();  
              } 
           }
connect_to_database();
?>