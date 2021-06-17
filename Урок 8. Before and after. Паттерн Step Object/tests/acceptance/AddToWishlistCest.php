<?php

use Page\Acceptance\WishListPage;

/**
 * Класс для проверки добавления товаров в список избранного
 */
class AddToWishlistCest
{
    /**
     * Метод, который выполняется после каждого теста
     */
    public function _after(\AcceptanceTester $I){
        $I->click(WishListPage::$DeleteWishList); 
        $I->wait(3);
        $I->click(WishListPage::$SignOut);

    }
    /**
     * Метод, который выполняется перед каждым тестом
     */
    public function _before(\AcceptanceTester $I){
        $I->amOnPage('');
        $I->click(WishListPage::$SignInButton);
        $I->waitForElementVisible(WishListPage::$AuthForm);
        $I->fillField(WishListPage::$EmailAuth, 'telmanalisher@gmail.com');
        $I->fillField(WishListPage::$PassAuth, 'Fkbithghjj1998');
        $I->click(WishListPage::$SubmitAuthButton);

    }
    public const PRODUCTS_NMB=2;
    public const ORDERS_NMB=2;

    /**
     * Проверка общего количества товаров в списке избранного
     */
   public function checkWishList(\AcceptanceTester $I)
   {
    $I->amOnPage('');
    $I->scrollTo(WishListPage::$scrollToThisElement);
 

    for($i=1; $i<= self::PRODUCTS_NMB; $i++)
    {  
        $I->moveMouseOver(sprintf(WishListPage::$FirstProduct, $i));
        $I->wait(3);
        $I->click(sprintf(WishListPage::$FirstProductsQuickView, $i));
        $I->switchToIFrame(sprintf(WishListPage::$Iframe, $i));
        $I->wait(5);
        $I->click(sprintf(WishListPage::$WishListButton, $i));
        $I->wait(7);
        $I->click(sprintf(WishListPage::$CloseWishListButton, $i));
        $I->wait(4);
        $I->switchToIFrame();
        $I->click(sprintf(WishListPage::$CloseIframeButton, $i));
        
    }
        $I->scrollTo(WishListPage::$MyCabinetButton);
        $I->click(WishListPage::$MyCabinetButton);
        $I->wait(3);
        $I->click(WishListPage::$MyWishListButton);
       
        $sum=0;
        $NumberOfOrders = $I->grabTextFrom(WishListPage::$NumberOfOrders);
        $sum += $NumberOfOrders;
        $I->assertEquals(self::ORDERS_NMB, $sum, 'Progress');
        $I->see('2', WishListPage::$NumberOfOrders);
    
   
   }
}
