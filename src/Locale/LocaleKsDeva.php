<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Script\ScriptDirection;

/**
 * Class LocaleKsDeva - Kashmiri
 *
 * @psalm-immutable
 */
class LocaleKsDeva extends LocaleKs
{
    public function direction(): ScriptDirection
    {
        return ScriptDirection::RTL;
    }

    public function endonym(): string
    {
        return 'कॉशुर';
    }

    public function script(): ScriptDeva
    {
        return new ScriptDeva();
    }
}
