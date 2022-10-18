<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFo;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Faroese
 *
 * @psalm-immutable
 */
class LocaleFo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'føroyskt';
    }

    public function endonymSortable(): string
    {
        return 'FOROYSKT';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFo();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
