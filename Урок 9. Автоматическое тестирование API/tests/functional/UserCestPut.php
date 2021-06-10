<?php

use Codeception\Example;

/**
 * Класс для работы с юзером
 */
class UserCest

{
    /**
     * Тест на создание юзера
     * @group test1 
     */
    public function checkUserCreate(\FunctionalTester $I)
    {
        $defaultScheme = [
            "job"       => 'string',
            "superhero" => 'boolean',
            "_id"       => 'string',
            "email"     => 'string',
            "name"      => 'string',
            "owner"     => 'string'
        ];
         
        $userData = [
            'email' => 'upgrade2@kolesa.kz',
            'owner' => 'alishtelman',
            'job'   => 'Market'
        ];
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPut('human', $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['nModified' => '0']);
        $I->sendGet('people', $userData);
        $I->seeResponseMatchesJsonType($defaultScheme);
    
    }

    /**
     * Проверяем негативный сценарий на создание пользователя без email
     * @group test2
     * @param Example $data
     */
    public function checkUserCreateNegative(\FunctionalTester $I, Example $data)
    {
        $owner = 'alishtelman'; 
        $email = 'upgrade2@kolesa.kz';

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', [
            $data['email'] ? $email : null,
            $data['owner'] ? $owner : null,
            ]);
        $I->seeResponseContainsJson($data['errorText']);
    
    }
    /**
     * dataProvider для теста checkUserCreateNegative
     */
    protected function getDataForCreateUserNegative()
    {
        return [
            [
                'email' => true,
                'owner' => false,
                'errorText' => ['error' => 'Internal Server Error']
            ],
            [
                'email' => false,
                'owner' => true,
                'errorText' => ['error' => 'Internal Server Error']
            ]
        ];
    }
}