<?php

namespace AppBundle\Util;

use AppBundle\Model\KaymuQuery;
use AppBundle\Model\MunchaQuery;
use AppBundle\Model\SastodealQuery;

class ResultFinder
{
    public function findResultKaymu($product_name)
    {
        $result_kaymu = $this->resultKaymuQuery($product_name);

        return $result_kaymu;
    }

    public function findResultMuncha($product_name)
    {
        $result_muncha = $this->resultMunchaQuery($product_name);

        return $result_muncha;
    }

    public function findResultSastoDeal($product_name)
    {
        $result_sastodeal = $this->resultSastoDealQuery($product_name);

        return $result_sastodeal;
    }

    protected function resultKaymuQuery($product_name)
    {
        $kaymu_query = KaymuQuery::create()
            ->filterByProductname($product_name)
            ->findOne();

        return $kaymu_query;
    }

    protected function resultMunchaQuery($product_name)
    {
        $muncha_query = MunchaQuery::create()
            ->filterByProductname($product_name)
            ->findOne();

        return $muncha_query;
    }

    protected function resultSastoDealQuery($product_name)
    {
        $sastodeal_query = SastodealQuery::create()
            ->filterByProductname($product_name)
            ->findOne();

        return $sastodeal_query;
    }
}
