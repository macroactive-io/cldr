<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTs;

/**
 * Class LocaleTs - Tsonga
 * @psalm-immutable
 */
class LocaleTs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Xitsonga';
    }

    public function endonymSortable(): string
    {
        return 'XITSONGA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTs();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
