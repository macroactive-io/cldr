<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCh;

/**
 * Class LocaleFrCh - Swiss French
 */
class LocaleFrCh extends LocaleFr
{
    public function endonym()
    {
        return 'français suisse';
    }

    public function endonymSortable()
    {
        return 'FRANCAIS SUISSE';
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
