<?php

namespace Codememory\Components\GEO\Interfaces;

/**
 * Interface LocationInterface
 *
 * @package Codememory\Components\GEO\Interfaces
 *
 * @author  Codememory
 */
interface LocationInterface
{

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns a city information object
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return CityInterface
     */
    public function getCity(): CityInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns a region information object
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return RegionInterface
     */
    public function getRegion(): RegionInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns a country information object
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return CountryInterface
     */
    public function getCountry(): CountryInterface;

}