<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAz;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleAz - Azerbaijani
 * @psalm-immutable
 */
class LocaleAz extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'azərbaycan';
    }

    public function endonymSortable(): string
    {
        return 'AZERBAYCAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAz();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
