<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNah;

/**
 * Class LocaleNah - Nahuatl
 * @psalm-immutable
 */
class LocaleNah extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Nahuatlahtolli';
    }

    public function endonymSortable(): string
    {
        return 'NAHUATLAHTOLLI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNah();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::COMMA,
            self::DECIMAL => self::DOT,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::PERCENT;
    }
}
