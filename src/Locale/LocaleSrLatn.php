<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleSrLatn
 */
class LocaleSrLatn extends LocaleSr
{
    public function endonym()
    {
        return 'srpski';
    }

    public function endonymSortable()
    {
        return 'SRPSKI';
    }

    public function script()
    {
        return new ScriptLatn();
    }
}
