<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleJv - Javanese
 * @psalm-immutable
 */
class LocaleJvLatn extends LocaleJv
{
    public function endonym(): string
    {
        return 'Basa Jawa';
    }

    public function endonymSortable(): string
    {
        return 'BASA JAWA';
    }

    public function script(): ScriptLatn
    {
        return new ScriptLatn();
    }
}
