<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleSrLatn
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
