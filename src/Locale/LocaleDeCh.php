<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCh;

/**
 * Class LocaleDeCh - Swiss High German
 * @psalm-immutable
 */
class LocaleDeCh extends LocaleDe
{
    public function endonym(): string
    {
        return 'Schweizer Hochdeutsch';
    }

    public function endonymSortable(): string
    {
        return 'SCHWEIZER HOCHDEUTSCH';
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::APOSTROPHE,
            self::DECIMAL => self::DOT,
        ];
    }

    public function territory(): TerritoryCh
    {
        return new TerritoryCh();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::PERCENT;
    }
}
