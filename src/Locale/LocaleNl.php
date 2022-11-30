<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNl;

/**
 * Dutch
 *
 * @psalm-immutable
 */
class LocaleNl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Nederlands';
    }

    public function endonymSortable(): string
    {
        return 'NEDERLANDS';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNl();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
