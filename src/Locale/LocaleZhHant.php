<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptHant;

/**
 * Class LocaleZhHant - Traditional Chinese
 * @psalm-immutable
 */
class LocaleZhHant extends LocaleZh
{
    public function endonym(): string
    {
        return '繁體中文';
    }

    public function script(): ScriptHant
    {
        return new ScriptHant();
    }

    protected function minimumGroupingDigits(): int
    {
        return 3;
    }
}
