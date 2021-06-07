<?php
namespace Page\Acceptance;

class WishListPage
{ 
 /**
     * Страница c платьями
     *
     * @var string
     */
    public static $dressesUrl = 'index.php?id_category=8&controller=category';
    /**
     * Локатор элемента для скролла
     */
    public static $scrollToThisElement = '//*[@id="homefeatured"]/li[1]/div/div[2]/div[1]/span';
    /**
     * Селектор картинки первого товара
     */
    public static $FirstProduct = '//*[@id="homefeatured"]/li[%u]/div/div[1]/div/a[1]/img';  
    /**
     * Селектор кнопки QuickView для первого товара
     */
    public static $FirstProductsQuickView = '//*[@id="homefeatured"]/li[%u]/div/div[1]/div/a[2]';
    /**
     * Локатор появления кнопки WishList
     */
    public static $waitAddToWishListButton = '//*[@id="product"]/div/div/div[3]';
    /**
     * Селектор Iframe
     */
    public static $Iframe = 'iframe.fancybox-iframe';
    /**
     * Селектор кнопки WishList  
     */ 
    public static $WishListButton = '//*[@id="wishlist_button"]';
    /**
     * Селектор кнопки закрытия уведомления об добавлении в WishList
     */
    public static $CloseWishListButton = '#product > div.fancybox-overlay.fancybox-overlay-fixed > div > div > a';
    /**
     * Локатор кнопки закрытия Iframe
     */
    public static $CloseIframeButton = '//*[@class="fancybox-item fancybox-close"]';
    /**
     * Локатор кнопки личного кабинета
     */
    public static $SignInButton = '#header > div.nav > div > div > nav > div.header_user_info > a'; 
    /**
     * Локатор кнопки личного кабинета
     */
    public static $MyCabinetButton = '//*[@id="header"]/div[2]/div/div/nav/div[1]/a';
    /**
     * Локатор кнопки My Wishlist
     */
    public static $MyWishListButton = '//*[@id="center_column"]/div/div[2]/ul/li/a';
    /**
     * Селектор строки в таблице, где указано количество товаров
     */
    public static $NumberOfOrders = '//*[@id="wishlist_34128"]/td[2]';
}
