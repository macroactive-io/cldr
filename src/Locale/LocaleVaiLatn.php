<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleVaiLatn
 * @psalm-immutable
 */
class LocaleVaiLatn extends LocaleVai
{
    public function script(): ScriptLatn
    {
        return new ScriptLatn();
    }
}
