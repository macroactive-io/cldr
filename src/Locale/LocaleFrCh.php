<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCh;

/**
 * Class LocaleFrCh - Swiss French
 * @psalm-immutable
 */
class LocaleFrCh extends LocaleFr
{
    public function endonym(): string
    {
        return 'français suisse';
    }

    public function endonymSortable(): string
    {
        return 'FRANCAIS SUISSE';
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
