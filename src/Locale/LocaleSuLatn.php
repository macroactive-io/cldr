<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleSuLatn
 * @psalm-immutable
 */
class LocaleSuLatn extends LocaleSu
{
    public function endonym(): string
    {
        return 'Basa Sunda';
    }

    public function endonymSortable(): string
    {
        return 'BASA SUNDA';
    }

    public function script(): ScriptLatn
    {
        return new ScriptLatn();
    }
}
