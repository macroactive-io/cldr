<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGsw;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Swiss German
 *
 * @psalm-immutable
 */
class LocaleGsw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Schwiizertüütsch';
    }

    public function endonymSortable(): string
    {
        return 'SCHWIIZERTUUTSCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGsw();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP    => self::APOSTROPHE,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
