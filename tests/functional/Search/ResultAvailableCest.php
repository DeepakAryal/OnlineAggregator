<?php

/**
 * Created by PhpStorm.
 * User: deepak
 * Date: 12/21/16
 * Time: 7:36 PM
 */
class ResultAvailableCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('index');

        $I->fillField('input#search_form_search_text', 'Dell inspiron 3543');

        $I->click('button#search_form_search_btn');
    }

    public function testResultItemName(FunctionalTester $I)
    {
        $I->wantToTest('we can see content of input');

        $I->seeElement('div.input-name');
    }

    public function testKaymuHeadingAvailable(FunctionalTester $I)
    {
        $I->wantToTest('we can see seperate heading for kaymu');

        $I->seeElement('div.kaymu-heading');
    }

    public function testMunchaHeadingAvailable(FunctionalTester $I)
    {
        $I->wantToTest('we can see seperate heading for muncha');

        $I->seeElement('div.muncha-heading');
    }

    public function testSastoDealHeadingAvailable(FunctionalTester $I)
    {
        $I->wantToTest('we can see seperate heading for sastodeal');

        $I->seeElement('div.sastodeal-heading');
    }

    public function testKaymuItemDiv(FunctionalTester $I)
    {
        $I->wantToTest('we can see seperate item div for kaymu');

        $I->seeElement('div.kaymu-item');
    }

    public function testMunchaItemDiv(FunctionalTester $I)
    {
        $I->wantToTest('we can see seperate item div for muncha');

        $I->seeElement('div.muncha-item');
    }

    public function testSastoDealItemDiv(FunctionalTester $I)
    {
        $I->wantToTest('we can see seperate item div for sastodeal');

        $I->seeElement('div.sastodeal-item');
    }

    public function testItemInKaymuLink(FunctionalTester $I)
    {
        $I->wantToTest('there is a link for searched item in kaymu');

        $I->seeElement('a[href="http://www.kaymu.com.np/dell-inspiron-3543-laptop-1696718.html"]');
    }

    public function testItemInMunchaLink(FunctionalTester $I)
    {
        $I->wantToTest('there is a link for searched item in muncha');

        $I->seeElement('a[href="http://www.shop.muncha.com/56929/I/Dell-Inspiron-3543-i7-Notebook-(5th-GEN).aspx?MID=1&CID=2813"]');
    }

    public function testItemInSastoDealLink(FunctionalTester $I)
    {
        $I->wantToTest('there is a link for searched item in sastoDeal');

        $I->seeElement('a[href="https://www.sastodeal.com/product/dell-inspiron-3543-with-graphics-card"]');
    }
}
