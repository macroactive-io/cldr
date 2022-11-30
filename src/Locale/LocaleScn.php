<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageScn;

/**
 * Sicilain
 *
 * @psalm-immutable
 */
class LocaleScn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Sicilianu';
    }

    public function endonymSortable(): string
    {
        return 'SICILIANU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageScn();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
