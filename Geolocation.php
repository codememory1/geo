<?php

namespace Codememory\Components\GEO;

use Codememory\Components\GEO\Interfaces\GeolocationInterface;
use Codememory\Components\GEO\Interfaces\LocationInterface;
use JetBrains\PhpStorm\Pure;
use SxGeo;

/**
 * Class Geolocation
 *
 * @package Codememory\Components\GEO
 *
 * @author  Codememory
 */
class Geolocation implements GeolocationInterface
{

    /**
     * @var SxGeo
     */
    private SxGeo $sxGeo;

    /**
     * @var array
     */
    private array $data = [];

    /**
     * @var bool
     */
    private bool $isSuccess = false;

    /**
     * Geolocation Construct
     */
    public function __construct()
    {

        require_once __DIR__ . '/libs/SxGeo.php';

        $this->sxGeo = new SxGeo(__DIR__ . '/SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);

    }

    /**
     * @inheritDoc
     */
    public function setIp(string $ip): Geolocation
    {

        $data = $this->sxGeo->getCityFull($ip);

        if (false !== $data) {
            $this->data = $data;
            $this->isSuccess = true;
        } else {
            $this->data = [];
            $this->isSuccess = false;
        }

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function isSuccess(): bool
    {

        return $this->isSuccess;

    }

    /**
     * @inheritDoc
     */
    #[Pure]
    public function getLocation(): LocationInterface
    {

        return new Location($this->data);

    }

}