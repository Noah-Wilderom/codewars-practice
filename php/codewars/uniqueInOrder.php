<?php

function uniqueInOrder($iterable){
    if(is_string($iterable)) $arr = str_split($iterable);
    if(is_int($iterable)) $arr = array_map('intval', str_split($iterable));
    $check = '';
    $ret = [];
    print_r((empty($arr) ? $iterable : $arr));
    foreach((empty($arr) ? $iterable : $arr) as $result) {
      if($check != $result) array_push($ret, $result); $check = $result;
  
    }
    
    return $ret;
  }
  print_r(uniqueInOrder("AAAABBBBBNNNNDDDD"));
  echo "\n";
  print_r(uniqueInOrder([1111, 2222, 3333, 555, 6666]));