<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHu;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Hungarian
 *
 * @psalm-immutable
 */
class LocaleHu extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'hungarian_ci';
    }

    public function endonym(): string
    {
        return 'magyar';
    }

    public function endonymSortable(): string
    {
        return 'MAGYAR';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHu();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
