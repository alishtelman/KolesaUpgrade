<?php
namespace Page;
/**
 * PageObject для страницы формы
 */
class Fill
{
    /**
     * Локатор поля имени 
     */
    public static $FirstName  = "//*[@id = 'firstName']";

    /**
     * Локатор поля фамилии
     */
    public static $lastName = "//*[@id = 'lastName']";

    /**
     * Локатор поля имейла
     */
    public static $email = "//*[@type = 'email']";

    /**
     * Локатор поля номера телефона
     */
    public static $phoneNumber = "//*[@id = 'phoneNumber']";

    /**
     * Локатор поля адреса
     */
    public static $adress = "//*[@id = 'address']";

    /**
     * Локатор поля города  
     */
    public static $city = "//*[@id = 'city']";

    /**
     * Локатор поля региона
     */
    public static $state = "//*[@id = 'state']";
    
    /**
     * Локатор поля почтового индекса  
     */
    public static $postal = "//*[@id = 'postal']"; 

    /**
     * Локатор кнопки регистрации
     */
    public static $registerButton = "//*[@type = 'submit']";

    /**
     * Локатор радио кнопки кредитной карты
     */
    public static $radioButtonForCard = "#input_32_paymentType_credit";
    
    /**
     * Локатор поля имени карты
     */
    public static $cardFirstName = "#input_32_cc_firstName";
    
    /**
     * Локатор поля фамилии карты
     */
    public static $cardLastName = "#input_32_cc_lastName";

    /**
     * Локатор поля номера карты 
     */
    public static $creditCardNumber = "#input_32_cc_number";
    /**
     * Локатора поля security code карты
     */
    public static $securityCode = "#input_32_cc_ccv";
    
    /**
     * Локатор поля месяца истечения срока
     */
    public static $expirationMonth = "#input_32_cc_exp_month > option:nth-child(6)";

    /**
     * Локатор поля года истечения срока 
     */
    public static $expirationYear = "#input_32_cc_exp_year > option:nth-child(3)"; 
}


