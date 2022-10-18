<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptHant;

/**
 * Yue
 *
 * @psalm-immutable
 */
class LocaleYueHant extends LocaleYue
{
    public function endonym(): string
    {
        return '粤语';
    }

    public function script(): ScriptHant
    {
        return new ScriptHant();
    }
}
