<?php
use PHPUnit\Framework\TestCase;

//clas yang mau di test.
require_once "Wordcount.php";
//Ini adalah perintah untuk mengimpor atau memasukkan file Wordcount.php ke dalam kode
//class untuk run Testing.
class SimpleTest extends TestCase {
    //Ini adalah definisi dari kelas SimpleTest yang akan digunakan untuk 
    //melakukan pengujian. Kelas ini meng-extend (mewarisi) dari kelas TestCase dari PHPUnit, 
    //yang berarti SimpleTest adalah sub-kelas dari TestCase.


    public function testCountWords(){
        // Ini adalah definisi dari metode testCountWords yang akan 
        //digunakan untuk menguji fungsi countWords dari kelas Wordcount.

        //Di sini, kita membuat objek dari kelas Wordcount yang akan diuji.
        $wc = new Wordcount();
        
        //kita masukan paramater 4 kata, yang harusnya dapat output ke 4.
        $TestSentence = "My name is dharma Saputra";
        $WordCount = $wc->countWords($TestSentence);

        $this -> assertEquals(5, $WordCount);
        //Di sini, menggunakan metode assertEquals dari kelas TestCase, 
        //kita membandingkan hasil yang diharapkan dengan hasil yang sebenarnya. 
        //Dalam kasus ini, kita mengharapkan bahwa jumlah kata dalam kalimat "My name is Dharman Saputra" adalah 5.
    }
}
?>