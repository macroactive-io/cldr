<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptLatn;

/**
 * Class LocaleHiLatn - Hindi
 *
 * @psalm-immutable
 */
class LocaleHiLatn extends LocaleHi
{
    public function endonym(): string
    {
        return 'Hindi';
    }

    public function script(): ScriptLatn
    {
        return new ScriptLatn();
    }
}
