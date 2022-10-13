<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

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
