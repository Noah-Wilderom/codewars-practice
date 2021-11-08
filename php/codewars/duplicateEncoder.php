<?php
function duplicate_encode($word){
	// ...
  $word = strtolower($word);
  $arr = str_split($word);
  $check = [];
  $resultArr = [];
  $count = count($arr);
  for($i = 0; $i < $count; $i++) {
    $checkL = $arr[$i];
    unset($arr[$i]);
    if(in_array($checkL, $arr) || in_array($checkL, $check)) {
        // Als de letter vaker voorkomt in de String
        echo $checkL . " Komt vaker voor \n";
        array_push($check, $checkL);
        array_push($resultArr, ")");
    } else {
        // Als de letter niet vaker voorkomt in de String
        echo $checkL . " Komt niet vaker voor \n";
        array_push($resultArr, "(");
    }
    
  }
  $return = implode($resultArr);
  return $return;
}

print_r(duplicate_encode("din"));
echo "\n\n";
print_r(duplicate_encode("recede"));