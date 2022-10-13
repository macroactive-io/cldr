<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptCyrl;

/**
 * Class LocaleBsCyrl
 * @psalm-immutable
 */
class LocaleBsCyrl extends LocaleBs
{
    public function script(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::PERCENT;
    }
}
