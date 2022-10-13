<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCh;

/**
 * Class LocaleDeCh - Swiss High German
 */
class LocaleDeCh extends LocaleDe
{
    public function endonym()
    {
        return 'Schweizer Hochdeutsch';
    }

    public function endonymSortable()
    {
        return 'SCHWEIZER HOCHDEUTSCH';
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::APOSTROPHE,
            self::DECIMAL => self::DOT,
        ];
    }

    public function territory()
    {
        return new TerritoryCh();
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::PERCENT;
    }
}
