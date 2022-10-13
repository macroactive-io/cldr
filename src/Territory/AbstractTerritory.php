<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of a geographic area.
 */
abstract class AbstractTerritory
{
    /**
     * @return int
     */
    public function firstDay()
    {
        return 1;
    }

    /**
     * @return string
     */
    public function measurementSystem()
    {
        return 'metric';
    }

    /**
     * @return string
     */
    public function paperSize()
    {
        return 'A4';
    }

    /**
     * @return int
     */
    public function weekendStart()
    {
        return 6;
    }

    /**
     * @return int
     */
    public function weekendEnd()
    {
        return 0;
    }
}
