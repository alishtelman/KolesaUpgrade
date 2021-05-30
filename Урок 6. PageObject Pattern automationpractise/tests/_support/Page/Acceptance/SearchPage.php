<?php
namespace Page\Acceptance;

class SearchPage
{
    /**
    * Урл страницы поиска летней одежды
    */
    public static $searchPageURL = 'http://automationpractice.com/index.php?id_category=11&controller=category';

    /**
    * Селектор кнопки отображения сеткой
    */
    public static $GridButton = '//*[@id="grid"]/a/i';

    /**
    * Селектор отображения товаров в блоке в виде сетки
    */
    public static $GridViewOfBlock = '//*[@id="center_column"]/ul';

    /**
    * Селектор кнопки отображения списком
    */
    public static $ListButton = '//*[@id="list"]/a/i'; 

    /**
    * Селектор отображения товаров в блоке в виде списка
    */
    public static $ListViewOfBlock = '//*[@id="center_column"]/ul';
  

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Кликает на кнопку отображения Списком
     */
    public function ClickOnListView()
    {
        $this->acceptanceTester->click(self::$ListButton);
    }

}
