<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCv;

/**
 * Class LocalePtCv
 * @psalm-immutable
 */
class LocalePtCv extends LocalePt
{
    public function territory(): TerritoryCv
    {
        return new TerritoryCv();
    }
}
