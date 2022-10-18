<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptCyrl;

/**
 * Class LocaleIt - Italian
 * @psalm-immutable
 */
class LocaleMoCyrl extends LocaleMo
{
    public function endonym(): string
    {
        return 'лимба молдовеняскэ';
    }

    public function endonymSortable(): string
    {
        return 'ЛИМБА МОЛДОВЕНЯСКЭ';
    }

    public function script(): ScriptCyrl
    {
        return new ScriptCyrl();
    }
}
