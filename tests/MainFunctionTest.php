<?php

use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "MainFunctions.php"; 

class MainFunctionTest extends TestCase
{
    	public function test_sha256()
    	{
        	$Enc = new MainFunctions();

	        $TestString = "Alya Aiman"; 
        	$enc = $Enc->sha256_digest($TestString);

	        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        	$this->assertEquals("009b3ba9da792c59bc90a2d281fb55448cc3eb1598cde5679f74ef7e8d47249e", $enc); 
    	}

	public function test_md5()
	{
		$Enc = new MainFunctions();

		$TestString = "Alya Aiman";
		$enc = $Enc->md5_digest($TestString);

		$this->assertEquals("af1ff9cd65c70c5fdcd31484a9936a1e", $enc);
	}

    
	public function test_tomorrow()
	{
        	$day = new MainFunctions();

	        $tmw = $day->tomorrow();

	        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        	$this->assertEquals("Friday", $tmw);
    	}

	public function test_kilometers()
	{
		$convert = new MainFunctions();
		$kilometers = 1;

		$miles = $convert->kilometers_to_miles($kilometers);

		$this->assertEquals(0.62, $miles);		
	}
}