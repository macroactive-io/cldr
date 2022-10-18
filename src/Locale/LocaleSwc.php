<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSwc;

/**
 * Class LocaleSwc - Congo Swahili
 * @psalm-immutable
 */
class LocaleSwc extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kiswahili ya Kongo';
    }

    public function endonymSortable(): string
    {
        return 'KISWAHILI YA KONGO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSwc();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
