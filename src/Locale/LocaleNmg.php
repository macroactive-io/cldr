<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNmg;

/**
 * Class LocaleNmg - Kwasio
 * @psalm-immutable
 */
class LocaleNmg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kwasio';
    }

    public function endonymSortable(): string
    {
        return 'KWASIO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNmg();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
