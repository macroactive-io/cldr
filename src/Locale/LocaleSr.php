<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSr;

/**
 * Class LocaleSr - Serbian
 * @psalm-immutable
 */
class LocaleSr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'српски';
    }

    public function endonymSortable(): string
    {
        return 'СРПСКИ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSr();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
