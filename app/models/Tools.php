<?php

namespace App\Models;

class Tools {

    public function calculator($a, $b) {
        return $a + $b;
    }

    function ddd($data){
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }

}