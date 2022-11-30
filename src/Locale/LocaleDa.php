<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDa;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Danish
 *
 * @psalm-immutable
 */
class LocaleDa extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'danish_ci';
    }

    public function endonym(): string
    {
        return 'dansk';
    }

    public function endonymSortable(): string
    {
        return 'DANSK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDa();
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
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
