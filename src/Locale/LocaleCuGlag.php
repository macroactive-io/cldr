<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptGlag;

/**
 * Class LocaleCuGlag - Old Church Slavonic
 */
class LocaleCuGlag extends LocaleCu
{
    public function endonym()
    {
        return 'ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ';
    }

    public function endonymSortable()
    {
        return 'ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ';
    }

    public function script()
    {
        return new ScriptGlag();
    }
}
