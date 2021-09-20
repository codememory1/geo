<?php

namespace Codememory\Components\GEO\Interfaces;

/**
 * Interface CountryInterface
 *
 * @package Codememory\Components\GEO\Interfaces
 *
 * @author  Codememory
 */
interface CountryInterface
{

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the name of the country in a specific language
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $lang
     *
     * @return string|null
     */
    public function getName(string $lang = 'en'): ?string;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the country code
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return string|null
     */
    public function getCode(): ?string;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the latitude of a country
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return int|float|null
     */
    public function getLatitude(): null|int|float;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the longitude of a country
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return int|float|null
     */
    public function getLongitude(): null|int|float;


}