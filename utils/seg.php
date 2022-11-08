<?php
class seg{
    public static function codificar($p){
        return base64_encode(base64_encode($p));
    }

    public static function decodificar($p){
        return base64_decode(base64_decode($p));
    }

}

?>