<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageWae;

/**
 * Walser
 *
 * @psalm-immutable
 */
class LocaleWae extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Walser';
    }

    public function endonymSortable(): string
    {
        return 'WALSER';
    }

    public function language(): LanguageInterface
    {
        return new LanguageWae();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::APOSTROPHE,
            self::DECIMAL => self::COMMA,
        ];
    }
}
