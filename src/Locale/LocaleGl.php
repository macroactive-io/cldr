<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGl;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Galician
 *
 * @psalm-immutable
 */
class LocaleGl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'galego';
    }

    public function endonymSortable(): string
    {
        return 'GALEGO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGl();
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
