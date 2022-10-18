<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKk;

/**
 * Kazakh
 *
 * @psalm-immutable
 */
class LocaleKk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'қазақ тілі';
    }

    public function endonymSortable(): string
    {
        return 'ҚАЗАҚ ТІЛІ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKk();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
