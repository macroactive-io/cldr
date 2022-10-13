<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleJv - Javanese
 */
class LocaleJvLatn extends LocaleJv
{
    public function endonym()
    {
        return 'Basa Jawa';
    }

    public function endonymSortable()
    {
        return 'BASA JAWA';
    }

    public function script()
    {
        return new ScriptLatn();
    }
}
