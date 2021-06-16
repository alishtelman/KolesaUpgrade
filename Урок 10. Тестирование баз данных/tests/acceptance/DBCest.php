<?php

use Helper\BaseHelper;
use Page\Acceptance\snapPage;

/**
 * Класс работы с БД
 */
class DBCest
{
    /**
     * Массив с данными для создания учетных записей
     */
    public function _before (\AcceptanceTester $I)
    {
        $userData = [ 
            "canBeKilledBySnap" => $I->getFaker() -> boolean(),
            "job" => $I->getFaker() -> company,
            "superhero" => $I->getFaker() -> boolean(),
            "skill" => $I->getFaker() -> word,
            "email" => $I->getFaker() -> email,
            "name" => $I->getFaker() -> name,
            "DOB" => $I->getFaker() -> date("Y-m-d"),
            "avatar" => $I->getFaker() -> imageUrl(),
            "created_at" => $I->getFaker() -> date("Y-m-d"),
            "owner" => "TelmanAlisher"
        ]; 
        return $userData; 
    }
    /**
     * Тест, на проверку создания и удаления учетных записей
     * @group t1
     */
    public function CreatingAndDelrtingAccounts(\AcceptanceTester $I)
    { 
        for ($i=0; $i < 10 ; $i++) 
        { 
            $userData = $this->_before($I);
            $I->haveInCollection('people', $userData);
            $I->seeInCollection('people', $userData);
        }

        $I->amOnPage('?owner=TelmanAlisher');
        $I->waitForElementVisible('.user-card');
        $usersWithSnapTrue = $I->grabFromCollection('people', array('owner' => 'TelmanAlisher', 'canBeKilledBySnap' => true));
        $usersWithSnapFalse = $I->grabFromCollection('people', array('owner' => 'TelmanAlisher', 'canBeKilledBySnap' => false));
        $I->click('#snap');
        $I->wait(3);
        $I->dontSeeElement('.avatar', ['src' => $usersWithSnapTrue['avatar']]);
        $I->SeeElement('.avatar', ['src' => $usersWithSnapFalse['avatar']]);
        $I->dontSeeInCollection('people', array('owner' => 'TelmanAlisher', 'canBeKilledBySnap' => true));
        $I->seeInCollection('people', array('owner' => 'TelmanAlisher', 'canBeKilledBySnap' => false));
    }
}

