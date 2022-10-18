<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptCyrl;

/**
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
