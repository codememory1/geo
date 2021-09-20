<?php

namespace Codememory\Components\GEO;

use Codememory\Components\GEO\Builders\CityBuilder;
use Codememory\Components\GEO\Builders\CountryBuilder;
use Codememory\Components\GEO\Builders\RegionBuilder;
use Codememory\Components\GEO\Interfaces\CityInterface;
use Codememory\Components\GEO\Interfaces\CountryInterface;
use Codememory\Components\GEO\Interfaces\LocationInterface;
use Codememory\Components\GEO\Interfaces\RegionInterface;

/**
 * Class Location
 *
 * @package Codememory\Components\GEO
 *
 * @author  Codememory
 */
class Location implements LocationInterface
{

    /**
     * @var array
     */
    private array $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {

        $this->data = $data;

    }

    /**
     * @inheritDoc
     */
    public function getCity(): CityInterface
    {

        $cityBuilder = new CityBuilder();

        $cityBuilder
            ->setName($this->data['city']['name_en'], $this->data['city']['name_ru'])
            ->setLatitude($this->data['city']['lat'])
            ->setLongitude($this->data['city']['lon']);

        return $cityBuilder;

    }

    /**
     * @inheritDoc
     */
    public function getRegion(): RegionInterface
    {

        $regionBuilder = new RegionBuilder();

        $regionBuilder
            ->setName($this->data['region']['name_en'], $this->data['region']['name_ru'])
            ->setCode($this->data['region']['iso']);

        return $regionBuilder;

    }

    /**
     * @inheritDoc
     */
    public function getCountry(): CountryInterface
    {

        $countryBuilder = new CountryBuilder();

        $countryBuilder
            ->setName($this->data['country']['name_en'], $this->data['country']['name_ru'])
            ->setLatitude($this->data['country']['lat'])
            ->setLongitude($this->data['country']['lon'])
            ->setCode($this->data['country']['iso']);

        return $countryBuilder;

    }

}