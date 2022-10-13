<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleShiLatn
 */
class LocaleShiLatn extends LocaleShi
{
    public function endonym()
    {
        return 'tamazight';
    }

    public function endonymSortable()
    {
        return 'TAMAZIGHT';
    }

    public function script()
    {
        return new ScriptLatn();
    }
}
