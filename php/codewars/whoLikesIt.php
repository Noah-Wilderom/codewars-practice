<?php
function likes( $names ) {
    $lengthArr = count($names);
    $index = (count($names) - 2);
    if(empty($names)) return 'no one likes this';
      foreach($names as $name) {
        switch($lengthArr) {
            case 0:
              return 'no one likes this';
              break;
            case 1: 
              return $names[0] . ' likes this';
              break;
            case 2:
              return $names[0] . ' and ' . $names[1] . ' like this';
              break;
            case 3:
              return $names[0] . ', ' . $names[1] . ' and ' . $names[2] . ' like this';
              break;
            case 4:
              return $names[0] . ', ' . $names[1] . ' and ' . $index . ' others like this';
              break;
            default:
                return $names[0] . ', ' . $names[1] . ' and ' . $index . ' others like this';
        }
          
        
      }
      // Your code here...
  }

  echo likes([]);