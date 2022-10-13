<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCh;

/**
 * Class LocalePtCh
 * @psalm-immutable
 */
class LocalePtCh extends LocalePt
{
    public function territory(): TerritoryCh
    {
        return new TerritoryCh();
    }
}
