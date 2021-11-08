<?php 

function LongestWord($sen) {
    $sen = explode(' ', $sen);
    $resultArr = [
        'length' => 0,
        'word' => ''
    ];
    foreach($sen as $str) {
        $str = preg_replace('/[^A-Za-z0-9\-\']/', '', $str);
        $len = strlen($str);
        if($len > $resultArr['length']) {
            $resultArr['length'] = $len;
            $resultArr['word'] = $str;
        }

    }
  // code goes here
  return $resultArr['word'];

}
   
// keep this function call here  
print_r(LongestWord("I love coderbyte"));  





/*
Longest Word

Have the function LongestWord(sen) take
the sen parameter being passed and return the
longest word in the string. If there are two
or more words that are the same length, return
the first word from the string with that length.
Ignore punctuation and assume sen will not be empty.
Words may also contain numbers,
for example "Hello world123 567"

Examples
Input: "fun&!! time"
Output: time
Input: "I love dogs"
Output: love
*/