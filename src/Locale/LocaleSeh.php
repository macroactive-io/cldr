<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSeh;

/**
 * Sena
 *
 * @psalm-immutable
 */
class LocaleSeh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'sena';
    }

    public function endonymSortable(): string
    {
        return 'SENA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSeh();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
