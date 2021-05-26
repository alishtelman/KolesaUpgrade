<?php

class SearchCest
{
   

    // tests
    public function SearchTest(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Printed Dress');
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('#center_column > ul > li', 5);

      
        
    
    }
}
