<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKhq;

/**
 * Class LocaleKhq - Koyra Chiini
 * @psalm-immutable
 */
class LocaleKhq extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Koyra ciini';
    }

    public function endonymSortable(): string
    {
        return 'KOYRA CIINI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKhq();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
