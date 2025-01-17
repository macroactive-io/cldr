<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDje;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Zarma
 *
 * @psalm-immutable
 */
class LocaleDje extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Zarmaciine';
    }

    public function endonymSortable(): string
    {
        return 'ZARMACIINE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDje();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
