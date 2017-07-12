<?php

/**
 * Created by PhpStorm.
 * User: deepak
 * Date: 12/21/16
 * Time: 8:04 PM
 */
class ResultUnavailableCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('index');

        $I->fillField('input#search_form_search_text', 'Dell mac 1458');

        $I->click('button#search_form_search_btn');
    }

    public function testResultItemName(FunctionalTester $I)
    {
        $I->wantToTest('we can see content of input');

        $I->seeElement('div.input-name');
    }

    public function testKaymuHeading(FunctionalTester $I)
    {
        $I->wantToTest('we can not see seperate heading for kaymu');

        $I->dontSeeElement('div.kaymu-heading');
    }

    public function testMunchaHeading(FunctionalTester $I)
    {
        $I->wantToTest('we can not see seperate heading for muncha');

        $I->dontSeeElement('div.muncha-heading');
    }

    public function testSastoDealHeading(FunctionalTester $I)
    {
        $I->wantToTest('we can not see seperate heading for sastodeal');

        $I->dontSeeElement('div.sastodeal-heading');
    }

    public function testKaymuItemDiv(FunctionalTester $I)
    {
        $I->wantToTest('we can not see seperate item div for kaymu');

        $I->dontSeeElement('div.kaymu-item');
    }

    public function testMunchaItemDiv(FunctionalTester $I)
    {
        $I->wantToTest('we can not see seperate item div for muncha');

        $I->dontSeeElement('div.muncha-item');
    }

    public function testSastoDealItemDiv(FunctionalTester $I)
    {
        $I->wantToTest('we can not see seperate item div for sastodeal');

        $I->dontSeeElement('div.sastodeal-item');
    }

    public function testItemInKaymuLink(FunctionalTester $I)
    {
        $I->wantToTest('there is no link for searched item in kaymu');

        $I->dontSeeElement('a[href="http://www.kaymu.com.np/dell-inspiron-3543-laptop-1696718.html"]');
    }

    public function testItemInMunchaLink(FunctionalTester $I)
    {
        $I->wantToTest('there is no link for searched item in muncha');

        $I->dontSeeElement('a[href="http://www.shop.muncha.com/56929/I/Dell-Inspiron-3543-i7-Notebook-(5th-GEN).aspx?MID=1&CID=2813"]');
    }

    public function testItemInSastoDealLink(FunctionalTester $I)
    {
        $I->wantToTest('there is no link for searched item in sastoDeal');

        $I->dontSeeElement('a[href="https://www.sastodeal.com/product/dell-inspiron-3543-with-graphics-card"]');
    }
}
