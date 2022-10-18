<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTk;

/**
 * Turkmen
 *
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
