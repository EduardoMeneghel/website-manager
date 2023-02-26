<?php

namespace App\Models;

class Tools {

    public function calculator($a, $b) :int {
        return $a + $b;
    }

    public function ddd($data) :string {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }

}
?>