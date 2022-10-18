<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEl;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleEl - Greek
 * @psalm-immutable
 */
class LocaleEl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ελληνικά';
    }

    public function endonymSortable(): string
    {
        return 'ΕΛΛΗΝΙΚΆ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEl();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
