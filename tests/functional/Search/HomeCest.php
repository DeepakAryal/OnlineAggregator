<?php

/**
 * Created by PhpStorm.
 * User: deepak
 * Date: 12/21/16
 * Time: 7:31 PM
 */
class HomeCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('index');
    }

    public function testSearchInputWidget(FunctionalTester $I)
    {
        $I->wantTo('Test that i can see input field');

        $I->seeElement('input#search_form_search_text');
    }

    public function testSearchButton(FunctionalTester $I)
    {
        $I->wantToTest('we can see search button.');

        $I->seeElement('button#search_form_search_btn');
    }
}
