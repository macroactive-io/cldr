<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptHant;

/**
 * Class LocaleZhHant - Traditional Chinese
 */
class LocaleZhHant extends LocaleZh
{
    public function endonym()
    {
        return '繁體中文';
    }

    public function script()
    {
        return new ScriptHant();
    }

    protected function minimumGroupingDigits()
    {
        return 3;
    }
}
