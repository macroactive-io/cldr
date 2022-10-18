<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptLatn;

/**
 * Class LocaleIuLatn - Inuktitut
 * @psalm-immutable
 */
class LocaleIuLatn extends LocaleIu
{
    public function endonym(): string
    {
        return 'Inuktitut';
    }

    public function endonymSortable(): string
    {
        return 'INUKTITUT';
    }

    public function script(): ScriptLatn
    {
        return new ScriptLatn();
    }
}
