<?php
namespace Page\Acceptance;

use PhpParser\Node\Stmt\Const_;

/**
 * Страница для авторизации
 * 
 */
class LoginPage
{
    /**
     * Юзер нейм для авторизации с ошибкой
     */
    public const USERNAME = 'locked_out_user';

    /**
     * Пароль для авторизации
     */
    public const PASSWORD = 'secret_sauce';

   /**
    * Урл станицы автоматизации
    */
    public static $URL = '';

    /**
     * Селектор поля ввода логина
     * 
     */
    public static $loginInput= '//input[@id="user-name"]';

     /**
     * Селектор поля ввода пароля
     * 
     */
    public static $passwordInput= '//input[@id="password"]';

    /**
     * Селектор кнопки для авторизации
     * 
     */
    public static $loginButton= '//input[@id="login-button"]';

    /**
     * Селектор появившегося блока с ошибкой
     */
    public static $errorBlock= '//*[@id="login_button_container"]/div/form/div[3]/h3';

    /**
     * Селектор кнопки, которая закрывает блок с ошибкой
     */
    public static $closeErrorBlockButton= '//*[@id="login_button_container"]/div/form/div[3]/h3/button';

    /**
     * Селектор блока с ошибкой
     */
    public static $DoNotSeeErrorBlock= '//*[@id="login_button_container"]/div/form/div[3]/h3';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

      /**
     * Закрывает блок с ошибкой
     */
    public function CloseErrorButton()
    {
        $this->acceptanceTester->click(self::$closeErrorBlockButton);
    }

}
