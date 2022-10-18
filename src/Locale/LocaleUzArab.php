<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptArab;

/**
 * Class LocaleUzArab
 * @psalm-immutable
 */
class LocaleUzArab extends LocaleUz
{
    public function script(): ScriptArab
    {
        return new ScriptArab();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::HYPHEN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
