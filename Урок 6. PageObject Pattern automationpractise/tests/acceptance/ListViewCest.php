<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

/**
 * Класс для проверки отображения продуктов в списке
 * 
 */
class ListViewCest
{
    /**
     * Тест кейс на смену раскладки результатов поиска
     */
    public function checkListView(AcceptanceTester $I)
    {
        $MainPage = new MainPage($I);
        $SearchPage = new SearchPage($I);

        $I->amOnPage(MainPage::$URL);
        $I->seeElement(MainPage::$elementDresses); 
        $MainPage->ClickOnDresses();
        $I->amOnUrl(MainPage::$URLcategory);
        $I->seeElement(MainPage::$SummerDresses);
        $I->click(MainPage::$SummerDresses);
        $I->amOnUrl(SearchPage::$searchPageURL);
        $I->seeElement(SearchPage::$GridButton);
        $I->seeElement(SearchPage::$GridViewOfBlock);
        $I->seeElement(SearchPage::$ListButton);
        $SearchPage->ClickOnListView();
        $I->seeElement(SearchPage::$ListViewOfBlock);
    }
}