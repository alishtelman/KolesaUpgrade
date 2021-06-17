<?php

class SearchCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function SearchForFiveElements(FunctionalTester $I)
    {
        $seeElementCSS = ('#search_query_top');
        $seeElementXpath = ('//*[@id="search_query_top"]');
        $clickButtonCSS = ('#searchbox > button');
        $clickButtonXpath = ('//*[@id="searchbox"]/button');
        $seeNumberOfElementsCss = ('#center_column > ul > li');
        $seeNumberOfElementsXpath = ('//*[@id="center_column"]/ul/li');

        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Printed Dress');
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('#center_column > ul > li', 5);
      
    }
}
