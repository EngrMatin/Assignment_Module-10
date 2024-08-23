<?php
function countVowels($str) 
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $str = strtolower($str);
    foreach (str_split($str) as $char) 
    {
        if (in_array($char, $vowels)) 
        {
            $count++;
        }
    }
    return $count;
}

function reverseString($str) 
{
    return strrev($str);
}

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) 
{
    $vowelCount = countVowels($string);
    $reversedString = reverseString($string);
    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>


