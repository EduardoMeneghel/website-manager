<?php

namespace App\Models;

use PDO;

class QueryManager{
    public function executeQuery($query) {
        require('../config/configs.php');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($query); 
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        return $stmt->fetchAll(); 
    }

    public function getCategory() :array {
        $queryManager = new QueryManager;
        $rows = $queryManager->executeQuery('SELECT p.*, (SELECT COALESCE(CONCAT("[", GROUP_CONCAT(JSON_OBJECT("id_menu_admin", f.id_menu_admin, "nm_name_child", f.nm_name_child, "ds_url_child", f.ds_url_child, "ds_ordination_child", f.ds_ordination_child)), "]"), "[]") FROM menu_admin_itens f WHERE f.id_menu_admin =  p.id ) AS children FROM menu_admin p ORDER BY p.ds_ordination ASC');
        foreach($rows as $row){
            if($row['children'] != '[]'){
                $row['children'] = json_decode($row['children']);
            }
            $data[] = $row;
        }
        return array('menu_admin' => $data);
    }
}
?>