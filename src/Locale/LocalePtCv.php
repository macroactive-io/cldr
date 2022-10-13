<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCv;

/**
 * Class LocalePtCv
 */
class LocalePtCv extends LocalePt
{
    public function territory()
    {
        return new TerritoryCv();
    }
}
