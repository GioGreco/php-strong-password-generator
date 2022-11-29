<?php
    function generatePSW($pswLEN){
        $characters = [
            'alphabet' => 'abcdefghijklmnopqrstuvwxyz',
            'numbers' => '0123456789',
            'symbols' => '|$%&/()[]{}?!*#@;<>:'
        ];

        $result = '';
        while(strlen($result) < $pswLEN){
            $key = array_rand($characters);
            $randCat = $characters[$key];
            $randChar = $randCat[rand(0, strlen($randCat) - 1)];
            $result .= $randChar ;
        }
        return $result;
    }

?>