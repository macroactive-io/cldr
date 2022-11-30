<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageVec;

/**
 * Class LocaleVec - Venetian
 *
 * @psalm-immutable
 */
class LocaleVec extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'veneto';
    }

    public function endonymSortable(): string
    {
        return 'VENETO';
    }

    public function language(): LanguageVec
    {
        return new LanguageVec();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
