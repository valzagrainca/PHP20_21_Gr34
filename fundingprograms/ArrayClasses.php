<?php
class ArrayDefinement{
    public function __construct() {
        echo "Konstruktori thirret çdo here. ";
        echo "<br>";
    }
 
    public function __destruct() {
        // echo "Destruktori thirret çdo here. ";
    }

    private $indexedArray;
    public function setindexedArray($indexedArray) {
        $this->indexedArray = $indexedArray;
    }

    public function getindexedArray() {
        return $this->indexedArray;
    }

    private $associativeArray;
    public function setassociativeArray($associativeArray) {
        $this->associativeArray = $associativeArray;
    }

    public function getassociativeArray() {
        return $this->associativeArray;
    }
    
    private $rangeArray;
    public function setrangeArray($rangeArray) {
        $this->rangeArray = $rangeArray;
    }

    public function getrangeArray() {
        return $this->rangeArray;
    }

}

class Array2Definement extends ArrayDefinement {
    private $multiDimArray;
    public function setmultidimArray($multiDimArray) {
        $this->multiDimArray = $multiDimArray;
    }

    public function getmultidimArray() {
        return $this->multiDimArray;
    }
}

?>