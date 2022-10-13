<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleShiLatn
 * @psalm-immutable
 */
class LocaleShiLatn extends LocaleShi
{
    public function endonym(): string
    {
        return 'tamazight';
    }

    public function endonymSortable(): string
    {
        return 'TAMAZIGHT';
    }

    public function script(): ScriptLatn
    {
        return new ScriptLatn();
    }
}
