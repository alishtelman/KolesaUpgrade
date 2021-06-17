<?php

class ArticlePageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function SearchBlouseTest(AcceptanceTester $I)
    {
        $scrollToTextBlouseCSS = '#homefeatured > li:nth-child(2)';
        $scrollToTextBlouseXpath = '//ul[@id="homefeatured"]/li[2]'; 
        $clickToQuickViewButtonCss = '#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img';
        $waitForElementCSS = '#index > div.fancybox-overlay.fancybox-overlay-fixed > div';
        $waitForElementXpath = '//*[@id="index"]/div[2]/div';
        $switchToIframeCSS = '';
        $switchToIFrameXpath = '';

        $I->amOnPage('');
        $I->scrollTo('#homefeatured > li:nth-child(2)');
        $I->seeElement('#homefeatured > li:nth-child(2)');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img'); 
        $I->waitForElementVisible('#index > div.fancybox-overlay.fancybox-overlay-fixed > div');
        $I->seeElement('#index > div.fancybox-overlay.fancybox-overlay-fixed > div');
        $I->amOnUrl('http://automationpractice.com/index.php');
        $I->switchToIFrame("#fancybox-frame1622104509098");
        $I->see('Blouse');
      
    }
}
