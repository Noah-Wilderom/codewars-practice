<?php 

function FirstFactorial($num) {
    if($num >= 1) {
        $return = $num;
        for($i = 1; $i < $num; $i++) {
            $return = $return * $i;
        }
    }
  // code goes here
    

  return $return;

}
   
// keep this function call here  
echo FirstFactorial(19);  
