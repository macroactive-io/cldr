<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMgh;

/**
 * Makhuwa-Meetto
 *
 * @psalm-immutable
 */
class LocaleMgh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Makua';
    }

    public function endonymSortable(): string
    {
        return 'MAKUA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMgh();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
