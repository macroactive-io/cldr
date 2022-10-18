<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCa;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleCa - Catalan
 * @psalm-immutable
 */
class LocaleCa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'català';
    }

    public function endonymSortable(): string
    {
        return 'CATALA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCa();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
