<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptHant;

/**
 * Class LocaleYueHant - Yue
 * @psalm-immutable
 */
class LocaleYueHant extends LocaleYue
{
    public function endonym(): string
    {
        return '粤语';
    }

    public function script(): ScriptHant
    {
        return new ScriptHant();
    }
}
