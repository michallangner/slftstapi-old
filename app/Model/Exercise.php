<?php

namespace App\Model;

class Exercise
{

    // function __construct(array $data) {
    //     foreach($data as $key => $val) {
    //         if(property_exists(__CLASS__,$key)) {
    //             $this->$key = $val;
    //         }
    //     }
    // }

    function setFromJSON($json){
        $jsonArray = json_decode($json, true);
        foreach($jsonArray as $key=>$value){
           $this->$key = $value;
        }
    }

}
