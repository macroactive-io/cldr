<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKm;

/**
 * Class LocaleKm - Khmer
 * @psalm-immutable
 */
class LocaleKm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ខ្មែរ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKm();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
