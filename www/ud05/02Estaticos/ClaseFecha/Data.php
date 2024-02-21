<?php

class Data{

    private static $calendario = "Calendario gregoriano";
    private static $dias = ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"];
    private static $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiemre", "Octubre", "Noviembre", "Diciembre"];


    static function getData(){
        $dia = date("d");
        $mes = date("m");
        $anyo = date("Y");
        $nombreDia = self::$dias[date("w")];
        $nombreMes = self::$meses[$mes - 1];

        return "Hoy es $nombreDia $dia de $nombreMes del $anyo ";

    }


    static function getCalendario(){
        return self::$calendario;
    }

    static function getHora(){
        return date("H:i:s");
    }

    static function getDataHora(){
        echo self::getData()." y son las ".self::getHora();
    }
}

?>