<?php

namespace App\Models;

use PDO;
use RecursiveArrayIterator;

class QueryManager{
    public function executeQuery($query) {
        require('../config/configs.php');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($query); 
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        return $stmt->fetchAll(); 
    
    }
}
?>