<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCount = preg_match_all('/[aeiou]/i', $string, $matches);

    $reversedString = strrev($string);

    print_r("Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n"); 
}
