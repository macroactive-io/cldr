<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptCyrl;

/**
 * Class LocaleUzCyrl
 * @psalm-immutable
 */
class LocaleUzCyrl extends LocaleUz
{
    public function script(): ScriptCyrl
    {
        return new ScriptCyrl();
    }
}
