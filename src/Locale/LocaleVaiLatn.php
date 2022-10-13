<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleVaiLatn
 */
class LocaleVaiLatn extends LocaleVai
{
    public function script()
    {
        return new ScriptLatn();
    }
}
