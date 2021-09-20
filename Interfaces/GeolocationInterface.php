<?php

namespace Codememory\Components\GEO\Interfaces;

use Codememory\Components\GEO\Geolocation;

/**
 * Interface GeolocationInterface
 *
 * @package Codememory\Components\GEO\Interfaces
 *
 * @author  Codememory
 */
interface GeolocationInterface
{

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Set the ip address where you need to get information
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $ip
     *
     * @return Geolocation
     */
    public function setIp(string $ip): Geolocation;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns a bool value indicating whether some information
     * was received by ip address
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return bool
     */
    public function isSuccess(): bool;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns location by ip address
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return LocationInterface
     */
    public function getLocation(): LocationInterface;

}