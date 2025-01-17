<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguagePt;

/**
 * Portuguese
 *
 * @psalm-immutable
 */
class LocalePt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'português';
    }

    public function endonymSortable(): string
    {
        return 'PORTUGUES';
    }

    public function language(): LanguagePt
    {
        return new LanguagePt();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
