<?php
    
    class Obj{
        public $books = "";
    }
    
    class aBook {
        public $title = "";
        public $author = "";
    }
    
    $aBook0 = new aBook();
    $aBook0->title = "Oh, The Places You'll Go";
    $aBook0->author = "Dr. Seuss";
    $aBook1 = new aBook();
    $aBook1->title = "Easy A";
    $aBook1->author = "Uncle Mikey";
    $aBook2 = new aBook();
    $aBook2->title = "Hard Z";
    $aBook2->author = "Aunt Michelle";
    $Sess = new Obj();
    $Sess->books = array($aBook0, $aBook1, $aBook2);
    echo json_encode($Sess);
?>