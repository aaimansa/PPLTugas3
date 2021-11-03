<?php
// File : Functions.php
class MainFunctions
{
    public function sha256_digest($string)
    {
        $salt = "8925433633";
        return hash('sha256',$string.$salt);
    }

    public function md5_digest($string)
    {
        $salt = "8925433633";
        return md5($string.$salt);
    }

    function tomorrow()
    {
        $current_date = date('Y-m-d');
        $date = strtotime($current_date); 
        
        return date('l', strtotime('+1 day',$date));
    }

    function kilometers_to_miles($kilometers)
    {
        $miles_scale = 0.62;
        return $kilometers * $miles_scale;
    }


}
