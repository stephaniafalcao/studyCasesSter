<?php

namespace Teste\Ster\Palindrome;

class Palindrome
{ 

    private string $word;

    public function __construct(string $word)
    {
        $this->word = $word;
    }

    public function isItAPalindrome(): bool
    {
        $lowerWord = strtolower($this->word);

        preg_match_all('/./us', $lowerWord, $newWord);
        $reverseWord = implode('', array_reverse($newWord[0]));

        return str_replace(" ", "", $lowerWord) === str_replace(" ", "", $reverseWord);
    }
}