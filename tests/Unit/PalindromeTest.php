<?php

namespace Scooter\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Teste\Ster\Palindrome\Palindrome;

class PalindromeTest extends TestCase
{

    public string $palindromeText;
    public string $noPalindromeText;

    protected function setUp(): void
    {
       $this->palindromeText = "A grama é amarga";
       $this->noPalindromeText = "Texto";
    }

    public function testTextIsAPalindromeWithSuccess()
    {
        $palindrome = new Palindrome($this->palindromeText);
        
        self::assertTrue($palindrome->isItAPalindrome());
    }

    public function testTextIsAPalindromeWithError()
    {
        $palindrome = new Palindrome($this->noPalindromeText);
        
        self::assertFalse($palindrome->isItAPalindrome());
    }
}