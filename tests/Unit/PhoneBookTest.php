<?php

namespace Scooter\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Teste\Ster\PhoneBook\PhoneBook;

class PhoneBookTest extends TestCase
{

    public array $list;

    protected function setUp(): void
    {
       $this->list = [
                        ['name' => 'Abigail', 'phone' => '15222447918',],
                        ['name' => 'Adriana', 'phone' => '15222447923',],
                        ['name' => 'Alan', 'phone' => '15222447885',],
                        ['name' => 'Alexandre', 'phone' => '15222447486',],
                        ['name' => 'Aline', 'phone' => '15222447105',],
                        ['name' => 'Amanda', 'phone' => '15222447406',],
                        ['name' => 'Amelia', 'phone' => '15222447359',],
                        ['name' => 'Andrea', 'phone' => '15222447499',],
                        ['name' => 'Angela', 'phone' => '15222447873',],
                        ['name' => 'Angelina', 'phone' => '15222447134',],
                        ['name' => 'Anna', 'phone' => '15222447717',],
                        ['name' => 'Antonio', 'phone' => '15222447774',],
                        ['name' => 'Aurelio', 'phone' => '15222447205',],
                        ['name' => 'Beatriz', 'phone' => '15222447199',],
                        ['name' => 'Benjamin', 'phone' => '15222447995',],
                        ['name' => 'Bernardo', 'phone' => '15222447621',],
                        ['name' => 'Boris', 'phone' => '15222447684',],
                        ['name' => 'Breno', 'phone' => '15222447562',],
                        ['name' => 'Camila', 'phone' => '15222447735',],
                        ['name' => 'Carlos', 'phone' => '15222447621',],
                        ['name' => 'Carol', 'phone' => '15222447576',],
                        ['name' => 'Carolina', 'phone' => '15222447369',],
                        ['name' => 'Catarina', 'phone' => '15222447336',],
                        ['name' => 'Christian', 'phone' => '15222447755',],
                        ['name' => 'Clarissa', 'phone' => '15222447917',],
                        ['name' => 'Conrado', 'phone' => '15222447498',],
                        ['name' => 'Daniel', 'phone' => '15222447335',],
                        ['name' => 'David', 'phone' => '15222447558',],
                        ['name' => 'Denise', 'phone' => '15222447890',],
                        ['name' => 'Diana', 'phone' => '15222447681',],
                        ['name' => 'Diane', 'phone' => '15222447624',],
                        ['name' => 'Doralice', 'phone' => '15222447982',],
                        ['name' => 'Doroteia', 'phone' => '15222447468',],
                        ['name' => 'Dylan', 'phone' => '15222447138',],
                        ['name' => 'Eduardo', 'phone' => '15222447769',],
                        ['name' => 'Elizabeth', 'phone' => '15222447664',],
                        ['name' => 'Eliana', 'phone' => '15222447374',],
                        ['name' => 'Emilia', 'phone' => '15222447925',],
                        ['name' => 'Eric', 'phone' => '15222447774',],
                        ['name' => 'Fatima', 'phone' => '15222447962',],
                        ['name' => 'Felicia', 'phone' => '15222447676',],
                        ['name' => 'Filomena', 'phone' => '15222447114',],
                        ['name' => 'Francine', 'phone' => '15222447166',],
                        ['name' => 'Gabrielle', 'phone' => '15222447340',],
                        ['name' => 'Graciane', 'phone' => '15222447229',],
                        ['name' => 'Humberto', 'phone' => '15222447687',],
                        ['name' => 'Irene', 'phone' => '15222447279',],
                        ['name' => 'Isaac', 'phone' => '15222447621',],
                        ['name' => 'Jackeline', 'phone' => '15222447498',],
                        ['name' => 'Jacob', 'phone' => '15222447486',],
                        ['name' => 'Jane', 'phone' => '15222447780',],
                        ['name' => 'Janete', 'phone' => '15222447536',],
                        ['name' => 'Jasmine', 'phone' => '15222447786',],
                        ['name' => 'Jennifer', 'phone' => '15222447923',],
                        ['name' => 'Jessica', 'phone' => '15222447591',],
                        ['name' => 'Joana', 'phone' => '15222447634',],
                        ['name' => 'Joao', 'phone' => '15222447507',],
                        ['name' => 'Jonathan', 'phone' => '15222447495',],
                        ['name' => 'Josephina', 'phone' => '15222447970',],
                        ['name' => 'Josue', 'phone' => '15222447948',],
                        ['name' => 'Julia', 'phone' => '15222447564',],
                        ['name' => 'Juliano', 'phone' => '15222447726',],
                        ['name' => 'Justino', 'phone' => '15222447240',],
                        ['name' => 'Karen', 'phone' => '15222447197',],
                        ['name' => 'Katherine', 'phone' => '15222447318',],
                        ['name' => 'Kevin', 'phone' => '15222447292',],
                        ['name' => 'Laura', 'phone' => '15222447420',],
                        ['name' => 'Lea', 'phone' => '15222447338',],
                        ['name' => 'Leonardo', 'phone' => '15222447709',],
                        ['name' => 'Lillian', 'phone' => '15222447694',],
                        ['name' => 'Lily', 'phone' => '15222447651',],
                        ['name' => 'Lisa', 'phone' => '15222447886',],
                        ['name' => 'Lucas', 'phone' => '15222447111',],
                        ['name' => 'Madalena', 'phone' => '15222447974',],
                        ['name' => 'Maria', 'phone' => '15222447419',],
                        ['name' => 'Marieta', 'phone' => '15222447652',],
                        ['name' => 'Mateus', 'phone' => '15222447208',],
                        ['name' => 'Max', 'phone' => '15222447782',],
                        ['name' => 'Melanie', 'phone' => '15222447738',],
                        ['name' => 'Michael', 'phone' => '15222447181',],
                        ['name' => 'Michelle', 'phone' => '15222447637',],
                        ['name' => 'Monica', 'phone' => '15222447908',],
                        ['name' => 'Natalia', 'phone' => '15222447859',],
                        ['name' => 'Nathan', 'phone' => '15222447207',],
                        ['name' => 'Neto', 'phone' => '15222447674',],
                        ['name' => 'Nicholas', 'phone' => '15222447814',],
                        ['name' => 'Nicola', 'phone' => '15222447546',],
                        ['name' => 'Oliver', 'phone' => '15222447281',],
                        ['name' => 'Olivia', 'phone' => '15222447208',],
                        ['name' => 'Paulo', 'phone' => '15222447145',],
                        ['name' => 'Penelope', 'phone' => '15222447769',],
                        ['name' => 'Peter', 'phone' => '15222447139',],
                        ['name' => 'Phil', 'phone' => '15222447358',],
                        ['name' => 'Rachel', 'phone' => '15222447243',],
                        ['name' => 'Rebecca', 'phone' => '15222447159',],
                        ['name' => 'Ricardo', 'phone' => '15222447703',],
                        ['name' => 'Roberto', 'phone' => '15222447296',],
                        ['name' => 'Rose', 'phone' => '15222447435',],
                        ['name' => 'Ruth', 'phone' => '15222447642',],
                        ['name' => 'Sabrina', 'phone' => '15222447736',],
                        ['name' => 'Samantha', 'phone' => '15222447729',],
                        ['name' => 'Sandra', 'phone' => '15222447851',],
                        ['name' => 'Sarah', 'phone' => '15222447217',],
                        ['name' => 'Sebastiao', 'phone' => '15222447973',],
                        ['name' => 'Simao', 'phone' => '15222447817',],
                        ['name' => 'Sonia', 'phone' => '15222447733',],
                        ['name' => 'Sophia', 'phone' => '15222447197',],
                        ['name' => 'Stephania', 'phone' => '15222447109',],
                        ['name' => 'Susana', 'phone' => '15222447965',],
                        ['name' => 'Theresa', 'phone' => '15222447881',],
                        ['name' => 'Thomas', 'phone' => '15222447167',],
                        ['name' => 'Tim', 'phone' => '15222447845',],
                        ['name' => 'Vanessa', 'phone' => '15222447996',],
                        ['name' => 'Victor', 'phone' => '15222447857',],
                        ['name' => 'Victoria', 'phone' => '15222447219',],
                        ['name' => 'Virginia', 'phone' => '15222447583',],
                        ['name' => 'Wanda', 'phone' => '15222447728',],
                        ['name' => 'Wanderleia', 'phone' => '15222447910',],
                        ['name' => 'William', 'phone' => '15222447180',],
                        ['name' => 'Yvonne', 'phone' => '15222447804',],
                        ['name' => 'Zion', 'phone' => '15222447865',]
                    ];
    }

    public function testGetNumberOfPhoneBookWithSuccess()
    {
        $phoneBook = new PhoneBook($this->list);
        
        self::assertTrue(is_string($phoneBook->searchPhoneNumber("Stephania")));
    }

    public function testGetNumberOfPhoneBookAndTheNumberNotExist()
    {
        $phoneBook = new PhoneBook($this->list);
        
        self::assertTrue(is_null($phoneBook->searchPhoneNumber("Ster")));
    }

    public function testGetNumberOfPhoneBookAndCompareWithAExistNumber()
    {
        $phoneBook = new PhoneBook($this->list);
        
        self::assertTrue('15222447109' === $phoneBook->searchPhoneNumber('Stephania'));
    }
}