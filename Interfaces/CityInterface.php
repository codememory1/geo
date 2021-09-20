<?php

namespace Codememory\Components\GEO\Interfaces;

/**
 * Interface CityInterface
 *
 * @package Codememory\Components\GEO\Interfaces
 *
 * @author  Codememory
 */
interface CityInterface
{

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the name of a city in a specific language
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $lang
     *
     * @return string|null
     */
    public function getName(string $lang = 'en'): ?string;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the latitude of a city
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return int|float|null
     */
    public function getLatitude(): null|int|float;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the longitude of a city
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return int|float|null
     */
    public function getLongitude(): null|int|float;

}