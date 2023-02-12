<?php
class QueryManager {
    public function executeQuery($query) {
        require('../config/configs.php');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($query); 
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k) { 
            return $k;
        }
    }
}
?>