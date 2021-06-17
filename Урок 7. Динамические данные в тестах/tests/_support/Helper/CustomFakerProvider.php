<?php
namespace Helper;

use Faker\Provider\Base;

class CustomFakerProvider extends Base 
{
    protected $cardFirstNumbers = [
        '5169',
        '4648'
    ];

    /**
     * Возвращает рандомный номер кредитной карты
     */
    public function creditCardNumber()
    {
        return sprintf(
            '%d-%d-%d-$d',
            $this->cardFirstNumbers[array_rand($this->cardFirstNumbers)],
            random_int(1000, 9999),
            random_int(1000, 9999),
            random_int(1000, 9999)
        );

    }
    protected $numberCCV = [
        '1',
        '2'
    ];

    /**
     * Возвращает рандомный CCV номер карты
     */
    public function CCVcardNumber()
    {
        return sprintf(
            '%d%d%d',
            $this->numberCCV[array_rand($this->numberCCV)],
            random_int(1, 9),
            random_int(1, 9),
            random_int(1, 9)
        );
    }
}
