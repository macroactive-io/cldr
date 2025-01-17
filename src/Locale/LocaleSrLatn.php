<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptLatn;

/**
 * @psalm-immutable
 */
class LocaleSrLatn extends LocaleSr
{
    public function endonym(): string
    {
        return 'srpski';
    }

    public function endonymSortable(): string
    {
        return 'SRPSKI';
    }

    public function script(): ScriptLatn
    {
        return new ScriptLatn();
    }
}
