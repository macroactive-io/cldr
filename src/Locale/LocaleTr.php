<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTr;

/**
 * Turkish
 *
 * @psalm-immutable
 */
class LocaleTr extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'turkish_ci';
    }

    public function endonym(): string
    {
        return 'Türkçe';
    }

    public function endonymSortable(): string
    {
        return 'TURKCE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTr();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PERCENT . '%s';
    }
}
