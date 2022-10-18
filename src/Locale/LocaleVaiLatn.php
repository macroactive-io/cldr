<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptLatn;

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
