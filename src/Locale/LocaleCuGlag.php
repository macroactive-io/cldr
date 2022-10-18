<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptGlag;

/**
 * Old Church Slavonic
 *
 * @psalm-immutable
 */
class LocaleCuGlag extends LocaleCu
{
    public function endonym(): string
    {
        return 'ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ';
    }

    public function endonymSortable(): string
    {
        return 'ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ';
    }

    public function script(): ScriptGlag
    {
        return new ScriptGlag();
    }
}
