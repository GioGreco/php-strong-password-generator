<?php
    function generatePSW($pswLEN){
        $characters = [
            'numbers' => '0123456789',
            'alphabet' => 'abcdefghijklmnopqrstuvwxyz',
            'symbols' => '|$%&/()[]{}?!*#@;<>:'
        ];

        $validCharacters = [];

        foreach($characters as $key => $value){
            if(in_array($key, $_SESSION['filters'])){
                $validCharacters[$key] = $value;
            }
        }
        
        $result = '';
        while(strlen($result) < $pswLEN){
            $key = array_rand($validCharacters);
            $randCat = $validCharacters[$key];

            //random lowercase or uppercase
            $upper_low_case = rand(0,1);
            if($randCat == $characters['alphabet'] && $upper_low_case === 0){
                $randChar = $randCat[rand(0, strlen($randCat) - 1)];
            }else{
                $randChar = strtoupper($randCat[rand(0, strlen($randCat) - 1)]);
            }

            $result .= $randChar ;
        }
        return $result;
    }

?>