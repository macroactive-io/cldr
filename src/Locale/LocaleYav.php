<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageYav;

/**
 * Yangben
 *
 * @psalm-immutable
 */
class LocaleYav extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'nuasue';
    }

    public function endonymSortable(): string
    {
        return 'NUASUE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageYav();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
