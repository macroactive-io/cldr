<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDje;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleDje - Zarma
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

    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
