<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptBeng;

/**
 * Class LocaleMniBeng - Bengali
 *
 * @psalm-immutable
 */
class LocaleMniBeng extends LocaleMni
{
    public function script(): ScriptBeng
    {
        return new ScriptBeng();
    }
}
