<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCh;

/**
 * Class LocalePtCh
 */
class LocalePtCh extends LocalePt
{
    public function territory()
    {
        return new TerritoryCh();
    }
}
