<?php

namespace Codememory\Components\GEO\Interfaces;

/**
 * Interface RegionInterface
 *
 * @package Codememory\Components\GEO\Interfaces
 *
 * @author  Codememory
 */
interface RegionInterface
{

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the name of the region for a specific language
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $lang
     *
     * @return string|null
     */
    public function getName(string $lang = 'en'): ?string;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the region code
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return string|null
     */
    public function getCode(): ?string;

}