<?php
phpinfo(); 
try {
    $dbh = new PDO('mysql:host=eduardo_mariadb;dbname=rolodex', 'root', '123');
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>