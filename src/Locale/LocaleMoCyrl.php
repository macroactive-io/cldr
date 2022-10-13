<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptCyrl;

/**
 * Class LocaleIt - Italian
 */
class LocaleMoCyrl extends LocaleMo
{
    public function endonym()
    {
        return 'лимба молдовеняскэ';
    }

    public function endonymSortable()
    {
        return 'ЛИМБА МОЛДОВЕНЯСКЭ';
    }

    public function script()
    {
        return new ScriptCyrl();
    }
}
