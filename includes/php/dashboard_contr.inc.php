<?php

    declare(strict_types=1);
   
function isResultEmpty(bool|array $result){

    if (gettype($result) == "boolean"){
        return true;
    }
    else if (count($result) < 1){
        return true;
    }
    else{
        return false;
    }

}