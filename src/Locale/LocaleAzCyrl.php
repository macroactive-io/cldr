<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptCyrl;

/**
 * Class LocaleAzCyrl
 */
class LocaleAzCyrl extends LocaleAz
{
    public function script()
    {
        return new ScriptCyrl();
    }
}
