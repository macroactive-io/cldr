<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSs;

/**
 * Swati
 *
 * @psalm-immutable
 */
class LocaleSs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Siswati';
    }

    public function endonymSortable(): string
    {
        return 'SISWATI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSs();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
