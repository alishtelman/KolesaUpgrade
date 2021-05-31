<?php

use Page\Acceptance\LoginPage;

/**
 * Класс для неудачной авторизации
 * 
 */
class ErrorLoginCest
{
    /**
     * Тест кейс на закрытие блока с ошибкой при неудачной авторизации
     * 
     */
    public function CheckErrorLogin(AcceptanceTester $I)
    {
        $LoginPage = new LoginPage($I);

        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$loginInput, LoginPage::USERNAME);
        $I->fillField(LoginPage::$passwordInput, LoginPage::PASSWORD);
        $I->click(LoginPage::$loginButton);
        $I->seeElement(LoginPage::$errorBlock);
        $LoginPage->CloseErrorButton();
        //$I->click(LoginPage::$closeErrorBlockButton);
        $I->dontSeeElement(LoginPage::$DoNotSeeErrorBlock);
    }
}
