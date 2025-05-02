 <?php
 class araba{
    public $renk;
    public $kasatipi;
    function __construct($r,$k){
        $this->renk=$r;
        $this->kasatipi=$k;
    
        
     }
 }
 class ford extends araba{
    public $paket;
    function __construct($r,$k,$p){
        $this->paket=$p;
        $this->renk=$r;
        $this->kasatipi=$k;
    }
 }
 
 $araba1=new ford("yavruağzi","sedan","titanyum");
 echo $araba1->renk ."<br>";
 echo $araba1->kasatipi ."<br>";
 echo $araba1->paket ."<br>";

 ?> 