<?php

class Wordcount {
    public function countWords($sentence){
        return count(explode(" ",$sentence));
    }
}
?>