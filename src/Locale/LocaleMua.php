<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMua;

/**
 * Mundang
 *
 * @psalm-immutable
 */
class LocaleMua extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'MUNDAŊ';
    }

    public function endonymSortable(): string
    {
        return 'MUNDAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMua();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
