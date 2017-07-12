<?php

class CheckDatabaseCest
{
    public function testKaymuData(Functionaltester $I)
    {
        $this->checkKaymuItemInDatabase($I);
    }

    public function testMunchaData(FunctionalTester $I)
    {
        $this->checkMunchaItemInDatabase($I);
    }

    public function testSastoDealData(FunctionalTester $I)
    {
        $this->checkSastoDealItemInDatabase($I);
    }

    protected function checkKaymuItemInDatabase(FunctionalTester $I)
    {
        $I->seeInDatabase('Kaymu', array(
            'ProductName' => 'Dell inspiron 3543',
            'Price' => '53500',
            'OS' => null,
            'RAM' => '4GB',
            'HDD' => '500GB',
            'Processor' => 'Intel core i5'
        ));
    }

    protected function checkMunchaItemInDatabase(FunctionalTester $I)
    {
        $I->seeInDatabase('Muncha', array(
            'ProductName' => 'Dell inspiron 3543',
            'Price' => '90440',
            'OS' => '',
            'RAM' => '8GB',
            'HDD' => '1TB',
            'Processor' => 'Intel i7 5th Generation'
        ));
    }

    protected function checkSastoDealItemInDatabase(FunctionalTester $I)
    {
        $I->seeInDatabase('Sastodeal', array(
            'ProductName' => 'Dell inspiron 3543',
            'Price' => '61200',
            'OS' => '',
            'RAM' => '4GB',
            'HDD' => '500GB',
            'Processor' => 'intel i5'
        ));
    }
}
