<?php

function delete_data() {    
    $servername = "localhost"; 
    $username = 'root';    
     $password = 'root'; 
     $databasename = "basetest01"; 
 try {      
       $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);  
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      
     $sql= "DELETE FROM produit WHERE nom='T-shirt noir'";
        $sth= $pdo->prepare($sql);
        $sth->execute();
        echo'Suppression réussie';    
 }  
        catch (PDOException $e) {        
            echo "Connection failed : ". $e->getMessage();  
              } 
           }
delete_data();

?>
