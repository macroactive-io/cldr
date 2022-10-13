<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFo;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFo - Faroese
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
