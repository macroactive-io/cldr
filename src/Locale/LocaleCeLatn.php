<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptLatn;

/**
 * Chechen
 *
 * @psalm-immutable
 */
class LocaleCeLatn extends LocaleCe
{
    public function endonym(): string
    {
        return 'Chechen';
    }

    public function endonymSortable(): string
    {
        return 'CHECHEN';
    }

    public function script(): ScriptLatn
    {
        return new ScriptLatn();
    }
}
