<?php
use PHPUnit\Framework\TestCase;

//clas yang mau di test.
require_once "Wordcount.php";

//class untuk run Testing.
class SimpleTest extends TestCase {
    public function testCountWords(){

        //kita pakai class yang mau kita test
        $wc = new Wordcount();
        
        //kita masukan paramater 4 kata, yang harusnya dapat output ke 4.
        $TestSentence = "My name is dharma Saputra";
        $WordCount = $wc->countWords($TestSentence);

        $this -> assertEquals(5, $WordCount);
    }
}
?>