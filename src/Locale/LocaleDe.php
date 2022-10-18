<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDe;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * German
 *
 * @psalm-immutable
 */
class LocaleDe extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'german2_ci';
    }

    public function endonym(): string
    {
        return 'Deutsch';
    }

    public function endonymSortable(): string
    {
        return 'DEUTSCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDe();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
