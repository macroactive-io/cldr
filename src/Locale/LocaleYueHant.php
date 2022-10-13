<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptHant;

/**
 * Class LocaleYueHant - Yue
 */
class LocaleYueHant extends LocaleYue
{
    public function endonym()
    {
        return '粤语';
    }

    public function script()
    {
        return new ScriptHant();
    }
}
