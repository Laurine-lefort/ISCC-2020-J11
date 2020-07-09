<?php

function maj_data() {    
    $servername = "localhost"; 
    $username = 'root';    
     $password = 'root'; 
     $databasename = "basetest01"; 
 try {      
       $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);  
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      
     $sql= "UPDATE produit SET quantité=1 WHERE id=4";
        $sth= $pdo->prepare($sql);
        $sth->execute();
        echo'Mise à jour réussie';    
 }  
        catch (PDOException $e) {        
            echo "Connection failed : ". $e->getMessage();  
              } 
           }
maj_data();

?>
