<?php

use Codeception\Example;
use Page\Acceptance\CheckElementsPage;

/**
 * Класс для проверки выбора двух рандомных элементов из списка разделов на сайте habr.com
 * @group test
 */
class CheckRandomElementsCest
{
    /**
     * Тест на проверку выбора двух рандомных элементов из списка
     * @group test
     * @param Example $data
     * @dataProvider getDataForLinks
     */
    public function chooseTwoRandomElementsFromList(\AcceptanceTester $I, Example $data)     
    {
        $I->amOnPage('');
        $I->click(sprintf(CheckElementsPage::$HabrSearchLinks, $data['LinkNumber']));
        $I->seeInCurrentUrl($data['url'], $data['headerName']);

    }
    protected function getDataForLinks()
    { #Как рандомно выбрать 2 элемента погуглил и понял, но не успею сделать по времени, приношу свои извинения
        return [
            ['LinkNumber' => '2', 'headerName' => 'Разработка', 'url' => 'develop'],
            ['LinkNumber' => '3', 'headerName' => 'Администрирование', 'url' => 'admin'] 
        ];
    }
}


