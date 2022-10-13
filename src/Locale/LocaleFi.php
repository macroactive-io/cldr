<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFi;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFi - Finnish
 * @psalm-immutable
 */
class LocaleFi extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'swedish_ci';
    }

    public function endonym(): string
    {
        return 'suomi';
    }

    public function endonymSortable(): string
    {
        return 'SUOMI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFi();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
