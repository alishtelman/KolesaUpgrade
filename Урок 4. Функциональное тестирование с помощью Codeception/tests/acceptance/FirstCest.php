<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->scrollTo('#homefeatured > li:nth-child(2) > div > div.right-block > h5');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.left-block > div');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->wait(7);
        $I->seeElement('#index > div.fancybox-overlay.fancybox-overlay-fixed > div');
        $I->see('Blouse');
      
        
    
    }
}
