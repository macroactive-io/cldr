<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptLatn;

/**
 * Class LocaleJv - Javanese
 * @psalm-immutable
 */
class LocaleJvLatn extends LocaleJv
{
    public function endonym(): string
    {
        return 'Basa Jawa';
    }

    public function endonymSortable(): string
    {
        return 'BASA JAWA';
    }

    public function script(): ScriptLatn
    {
        return new ScriptLatn();
    }
}
