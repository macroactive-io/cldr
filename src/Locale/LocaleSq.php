<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSq;

/**
 * Class LocaleSq - Albanian
 * @psalm-immutable
 */
class LocaleSq extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'shqip';
    }

    public function endonymSortable(): string
    {
        return 'SHQIP';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSq();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
