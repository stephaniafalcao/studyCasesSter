<?php

use Teste\Ster\Palindrome\Palindrome;

require 'vendor/autoload.php';


$texto1 = "Asa";
$palindrome1 = new Palindrome($texto1);
$texto2 = "A grama é amarga";
$palindrome2 = new Palindrome($texto2);
$texto3 = "Vida";
$palindrome3 = new Palindrome($texto3);

assert($palindrome1->isItAPalindrome() === true); 
assert($palindrome2->isItAPalindrome() === true); 
assert($palindrome3->isItAPalindrome() === false); 

