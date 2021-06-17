<?php

namespace Test\Acceptance;

use Faker\Factory;
use Helper\CustomFakerProvider;
use Page\Fill;

/**
 * Класс для тестирования формы 
 */
class fillFieldCest 
{
    /**
     * Тест на проверку заполнения полей с помощью фейкера
     * @group test2
     */
    public function checkFillField  (\AcceptanceTester $I)
    {
        $faker = Factory::create();
        $faker->addProvider(new CustomFakerProvider($faker));
        
        $name = $faker->name;
        $lastName = $faker->lastName;
        $email = $faker->email;
        $phoneNumber = $faker->phoneNumber; 
        $adress = $faker->address; 
        $city = $faker->city;
        $state = $faker->state; 
        $postal = $faker->postcode;
        $cardFirstName = $faker->firstName;
        $cardLastName = $faker->lastName;
        $creditCardNumber = $faker->creditCardNumber();
        $securityCode = $faker->CCVcardNumber();


        $I->amOnPage('');
        $I->fillField(Fill::$FirstName, $name);
        $I->fillField(Fill::$lastName, $lastName);
        $I->fillField(Fill::$email, $email);
        $I->fillField(Fill::$phoneNumber, $phoneNumber);
        $I->fillField(Fill::$adress, $adress);
        $I->fillField(Fill::$city, $city);
        $I->fillField(Fill::$state, $state);
        $I->fillField(Fill::$postal, $postal);
        $I->click( Fill::$radioButtonForCard);
        $I->fillField(Fill::$cardFirstName, $cardFirstName);
        $I->fillField(Fill::$cardLastName, $cardLastName);
        $I->fillField(Fill::$creditCardNumber, $creditCardNumber);
        $I->fillField(Fill::$securityCode, $securityCode);
        $I->waitForElementClickable(Fill::$expirationMonth);
        $I->click(Fill::$expirationMonth);
        $I->waitForElementClickable(Fill::$expirationYear);
        $I->click(Fill::$expirationYear);
        $I->click(Fill::$registerButton);
        $I->waitForText('Good job');         
    }
}

