<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNr;

/**
 * South Ndebele
 *
 * @psalm-immutable
 */
class LocaleNr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'isiNdebele';
    }

    public function endonymSortable(): string
    {
        return 'ISINDEBELE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNr();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
