<?php
class showinfo{
    public function add($f_num, $l_num){
        echo "Result: ".$f_num+$l_num."<br>";

    }
    public function sub($f_num, $l_num){
        echo "Result: ".$f_num-$l_num."<br>";

    }
    public function mul($f_num, $l_num){
        echo "Result: ".$f_num*$l_num."<br>";

    }
    public function div($f_num, $l_num){
        echo "Result: ".$f_num/$l_num."<br>";

    }
    public function mod($f_num, $l_num){
        echo "Result: ".$f_num%$l_num."<br>";

    }
    public function pow($f_num, $l_num){
        $result =$f_num**$l_num;
        echo "Result: $result <br>";

    }
    
}
?>