<?php
class Matematika
{
    public static function pangkatBilangan($bilanganBasic, $bilanganExponen)
    {
        $nilaiSekarang = 1;
        for ($i = 1; $i <= $bilanganExponen; $i++) {
            $nilaiSekarang = $nilaiSekarang * $bilanganBasic;
        }
        return $nilaiSekarang;
    }

    public static function tambah($a, $b)
    {
        if(is_numeric($a) && is_numeric($b))    {
            return $a+$b;
        }   else{
            return "Error";
        }
    }
    
    public static function kurang($a, $b)
    {
        if(is_numeric($a) && is_numeric($b))    {
            return $a-$b;
        }   else{
            return "Error";
        }
    }

    public static function kali($a, $b)
    {
        if(is_numeric($a) && is_numeric($b))    {
            return $a*$b;
        }   else{
            return "Error";
        }
    }

    public static function bagi($a, $b)
    {
        if(is_numeric($a) && is_numeric($b))    {
            return $a/$b;
        }   else{
            return "Error";
        }
    }
}