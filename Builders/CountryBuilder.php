<?php

namespace Codememory\Components\GEO\Builders;

use Codememory\Components\GEO\Interfaces\CountryInterface;
use Codememory\Support\Str;
use JetBrains\PhpStorm\Pure;

/**
 * Class CountryBuilder
 *
 * @package Codememory\Components\GEO\Builders
 *
 * @author  Codememory
 */
final class CountryBuilder implements CountryInterface
{

    /**
     * @var array|null[]
     */
    private array $name = [
        'en' => null,
        'ru' => null
    ];

    /**
     * @var string|null
     */
    private ?string $code = null;

    /**
     * @var int|float|null
     */
    private null|int|float $latitude = null;

    /**
     * @var int|float|null
     */
    private null|int|float $longitude = null;

    /**
     * @param string $en
     * @param string $ru
     *
     * @return $this
     */
    public function setName(string $en, string $ru): CountryBuilder
    {

        $this->name['en'] = $en;
        $this->name['ru'] = $ru;

        return $this;

    }

    /**
     * @inheritDoc
     */
    #[Pure]
    public function getName(string $lang = 'en'): ?string
    {

        $lang = Str::toLowercase($lang);

        if (!array_key_exists($lang, $this->name)) {
            return $this->name['en'];
        }

        return $this->name[$lang];

    }

    /**
     * @param string|null $code
     *
     * @return CountryBuilder
     */
    public function setCode(?string $code): CountryBuilder
    {

        $this->code = $code;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function getCode(): ?string
    {

        return $this->code;

    }

    /**
     * @param int|float $latitude
     *
     * @return $this
     */
    public function setLatitude(int|float $latitude): CountryBuilder
    {

        $this->latitude = $latitude;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function getLatitude(): null|int|float
    {

        return $this->latitude;

    }

    /**
     * @param int|float $longitude
     *
     * @return $this
     */
    public function setLongitude(int|float $longitude): CountryBuilder
    {

        $this->longitude = $longitude;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function getLongitude(): null|int|float
    {

        return $this->longitude;

    }

}