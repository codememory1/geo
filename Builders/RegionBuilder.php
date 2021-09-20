<?php

namespace Codememory\Components\GEO\Builders;

use Codememory\Components\GEO\Interfaces\RegionInterface;
use Codememory\Support\Str;
use JetBrains\PhpStorm\Pure;

/**
 * Class RegionBuilder
 *
 * @package Codememory\Components\GEO\Builders
 *
 * @author  Codememory
 */
final class RegionBuilder implements RegionInterface
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
     * @param string $en
     * @param string $ru
     *
     * @return $this
     */
    public function setName(string $en, string $ru): RegionBuilder
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
     * @return RegionBuilder
     */
    public function setCode(?string $code): RegionBuilder
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

}