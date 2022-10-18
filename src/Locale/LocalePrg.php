<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguagePrg;

/**
 * Class LocalePrg - Old Prussian
 * @psalm-immutable
 */
class LocalePrg extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'latvian_ci';
    }

    public function endonym(): string
    {
        return 'prūsiskan';
    }

    public function endonymSortable(): string
    {
        return 'PRŪSISKAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePrg();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function minimumGroupingDigits(): int
    {
        return 3;
    }
}
