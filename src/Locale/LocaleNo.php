<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageNo;

/**
 * Class LocaleNo - Norwegian Nynorsk
 *
 * @psalm-immutable
 */
class LocaleNo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'norsk';
    }

    public function endonymSortable(): string
    {
        return 'NORSK';
    }

    public function language(): LanguageNo
    {
        return new LanguageNo();
    }

    protected function numberSymbols(): array
    {
        return [
            self::DECIMAL  => self::COMMA,
            self::GROUP    => self::NBSP,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
