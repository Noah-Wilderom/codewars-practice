<?php 
/**
 * @author Noah Wilderom
 * ** Scored a 10 **
 * time: 0.044s
 */
function FirstReverse($str) {

    $arr = str_split($str);
    $arr = array_reverse($arr);
    $return = implode($arr);
  // code goes here
  return $return;

}
   
// keep this function call here  
echo FirstReverse("Hello World");  


/*
First Reverse
Have the function FirstReverse(str) take
the str parameter being passed and return
the string in reversed order.
For example: if the input string is "Hello World and Coders"
then your program should return the string sredoC dna
dlroW olleH.

Examples
Input: "coderbyte"
Output: etybredoc
Input: "I Love Code"
Output: edoC evoL I

*/