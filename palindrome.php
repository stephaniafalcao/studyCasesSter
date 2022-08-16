<?php

use Teste\Ster\Palindrome\Palindrome;

require 'vendor/autoload.php';


$texto = "A grama é amarga";
$palindrome = new Palindrome($texto);

echo !$palindrome->isItAPalindrome() ? "{$texto} is not a palindrome" : "{$texto} is a palindrome"; 

