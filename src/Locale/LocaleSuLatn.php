<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleSuLatn
 */
class LocaleSuLatn extends LocaleSu
{
    public function endonym()
    {
        return 'Basa Sunda';
    }

    public function endonymSortable()
    {
        return 'BASA SUNDA';
    }

    public function script()
    {
        return new ScriptLatn();
    }
}
