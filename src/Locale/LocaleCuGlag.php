<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptGlag;

/**
 * Class LocaleCuGlag - Old Church Slavonic
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
