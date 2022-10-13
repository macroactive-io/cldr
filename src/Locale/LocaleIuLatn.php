<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleIuLatn - Inuktitut
 */
class LocaleIuLatn extends LocaleIu
{
    public function endonym()
    {
        return 'Inuktitut';
    }

    public function endonymSortable()
    {
        return 'INUKTITUT';
    }

    public function script()
    {
        return new ScriptLatn();
    }
}
