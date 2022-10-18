<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptCyrl;

/**
 * @psalm-immutable
 */
class LocaleAzCyrl extends LocaleAz
{
    public function script(): ScriptCyrl
    {
        return new ScriptCyrl();
    }
}
