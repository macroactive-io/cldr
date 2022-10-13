<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAgq;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAgq - Aghem
 * @psalm-immutable
 */
class LocaleAgq extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Aghem';
    }

    public function endonymSortable(): string
    {
        return 'AGHEM';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAgq();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
