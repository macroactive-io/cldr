<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTk;

/**
 * Class LocaleTk - Turkmen
 * @psalm-immutable
 */
class LocaleTk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'türkmen dili';
    }

    public function endonymSortable(): string
    {
        return 'TURKMEN DILI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTk();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
