<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKa;

/**
 * Class LocaleKa - Georgian
 * @psalm-immutable
 */
class LocaleKa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ქართული';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKa();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function minimumGroupingDigits(): int
    {
        return 2;
    }
}
