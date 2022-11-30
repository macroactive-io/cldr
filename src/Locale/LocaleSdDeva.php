<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Script\ScriptDirection;

/**
 * Class LocaleSdDeva - Sindhi
 *
 * @psalm-immutable
 */
class LocaleSdDeva extends LocaleSd
{
    public function direction(): ScriptDirection
    {
        return ScriptDirection::RTL;
    }

    public function script(): ScriptDeva
    {
        return new ScriptDeva();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP    => self::COMMA,
            self::DECIMAL  => self::DOT,
            self::NEGATIVE => self::HYPHEN,
        ];
    }

    protected function percentFormat(): string
    {
        return AbstractLocale::PLACEHOLDER . self::PERCENT;
    }
}
