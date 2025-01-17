<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCh;

/**
 * Swiss High German
 *
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

    public function territory(): TerritoryCh
    {
        return new TerritoryCh();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::APOSTROPHE,
            self::DECIMAL => self::DOT,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::PERCENT;
    }
}
