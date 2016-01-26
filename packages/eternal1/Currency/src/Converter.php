<?php
/**
 * User: Eternal1
 * Date: 1/22/2016
 * Time: 1:10 PM
 */

namespace Eternal1\Currency;


class Converter
{

    /**
     * @var DataSource
     */
    private $source;

    /**
     * @param DataSource $source
     */
    function __construct(DataSource $source)
    {
        $this->source = $source;
    }

    /**
     * Source currency
     * @param $source
     *
     * Destination currency
     * @param $destination
     *
     * Amount to convert
     * @param $amount
     */

    function convert($source, $destination, $amount)
    {
        $currencies = $this->source->fetch();

        if (!isset($currencies[$source])) {
            throw new \RuntimeException("Currency not found: {$source}");
        }

        if (!isset($currencies[$destination])) {
            throw new \RuntimeException("Currency not found: {$destination}");
        }

        return $amount * $currencies[$destination]/$currencies[$source];
    }

}