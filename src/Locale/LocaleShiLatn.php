<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptLatn;

/**
 * @psalm-immutable
 */
class LocaleShiLatn extends LocaleShi
{
    public function endonym(): string
    {
        return 'tamazight';
    }

    public function endonymSortable(): string
    {
        return 'TAMAZIGHT';
    }

    public function script(): ScriptLatn
    {
        return new ScriptLatn();
    }
}
