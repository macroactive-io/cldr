<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptArab;

/**
 * Class LocalePaArab
 * @psalm-immutable
 */
class LocalePaArab extends LocalePa
{
    public function numberSymbols(): array
    {
        return [
            self::DECIMAL => self::ARAB_DECIMAL,
        ];
    }

    public function script(): ScriptArab
    {
        return new ScriptArab();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
