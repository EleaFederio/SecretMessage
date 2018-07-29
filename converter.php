<?php

class Converter{
    public  function readMessage($message){
        $subMessages = str_split($message, 3);
        foreach($subMessages as $subMessage){
            echo chr((int)$subMessage);
        }
    }
      
      
    function writeMessage($secret){
        $subSecrets = str_split($secret, 1);
        foreach($subSecrets as $subSecret){
            $hidden = ord($subSecret);
            $filtered = (string)$hidden;
            if(strlen($filtered) < 3){
                $filtered = '0'.$filtered;
            }
            echo $filtered;
        }
    }
}
