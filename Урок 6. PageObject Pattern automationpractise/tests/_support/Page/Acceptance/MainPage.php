<?php
namespace Page\Acceptance;
/**
 * Главная страница
 * 
 */
class MainPage
{ /**
    * Урл главной страницы
    */
    public static $URL = '';

    /**
     * Селектор элемента Dresses на странице
     */
    public static $elementDresses = '//*[@id="block_top_menu"]/ul/li[2]/a';

    /**
     * Урл страницы выбора категории одежды
     */
    public static $URLcategory = 'http://automationpractice.com/index.php?id_category=8&controller=category';

     /**
     * Селектор категории одежды- 'Summer' 
     */
    public static $SummerDresses = '//*[@id="subcategories"]/ul/li[3]/div[1]/a';
    

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Кликает на элемент Dresses на сайте
     */
    public function ClickOnDresses()
    {
        $this->acceptanceTester->click(self::$elementDresses);
    }
}
