<?php
/**
 * User: Eternal1
 * Date: 1/22/2016
 * Time: 11:13 AM
 */

namespace Eternal1\Currency;

class DataSource
{

    public function fetch()
    {
        $data = simplexml_load_file(config('currency.source'))->children()->children()->children();

        $currencies = ['EUR' => 1];

        foreach ($data as $node) {
            $currencies[(string)$node['currency']] = (float)$node['rate'];
        }

        return $currencies;
    }
}