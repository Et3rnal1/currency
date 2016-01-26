<?php
/**
 * User: Eternal1
 * Date: 1/22/2016
 * Time: 11:12 AM
 */

namespace Eternal1\Currency;


class ConverterWidget
{

    /**
     * @var DataSource
     */
    private $source;

    function __construct(DataSource $source)
    {
        $this->source = $source;
    }

    function render()
    {
        return view('converter::index', ['endpoint' => config('currency.api_uri'), 'values' => $this->source->fetch()]);
    }
}