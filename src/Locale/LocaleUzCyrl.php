<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptCyrl;

/**
 * @psalm-immutable
 */
class LocaleUzCyrl extends LocaleUz
{
    public function script(): ScriptCyrl
    {
        return new ScriptCyrl();
    }
}
