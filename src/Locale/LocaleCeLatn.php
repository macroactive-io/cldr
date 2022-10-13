<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleCeLatn - Chechen
 */
class LocaleCeLatn extends LocaleCe
{
    public function endonym()
    {
        return 'Chechen';
    }

    public function endonymSortable()
    {
        return 'CHECHEN';
    }

    public function script()
    {
        return new ScriptLatn();
    }
}
