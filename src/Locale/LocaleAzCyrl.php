<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptCyrl;

/**
 * Class LocaleAzCyrl
 * @psalm-immutable
 */
class LocaleAzCyrl extends LocaleAz
{
    public function script(): ScriptCyrl
    {
        return new ScriptCyrl();
    }
}
