<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageUk;

/**
 * Class LocaleUk - Ukrainian
 * @psalm-immutable
 */
class LocaleUk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'українська';
    }

    public function endonymSortable(): string
    {
        return 'УКРАЇНСЬКА';
    }

    public function language(): LanguageInterface
    {
        return new LanguageUk();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
