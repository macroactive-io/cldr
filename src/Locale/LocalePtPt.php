<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguagePtPt;

/**
 * European Portuguese
 *
 * @psalm-immutable
 */
class LocalePtPt extends AbstractLocale implements LocaleInterface
{
    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function code(): string
    {
        return 'pt_PT';
    }

    public function endonym(): string
    {
        return 'português europeu';
    }

    public function endonymSortable(): string
    {
        return 'PORTUGUES EUROPEU';
    }

    public function language(): LanguagePtPt
    {
        return new LanguagePtPt();
    }
}
