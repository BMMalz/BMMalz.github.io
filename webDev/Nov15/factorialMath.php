<?php

    function factorialize($number){
        $result = 1;
        for ($i = $number; $i > 0; $i--)
        {
            $result = ($result * $i);
        }
        return $result;
    }

    $num = $_POST["number"];
    $res = factorialize($num);
    echo "$num! equals $res";

?>