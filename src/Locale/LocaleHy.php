<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHy;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHy - Armenian
 * @psalm-immutable
 */
class LocaleHy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'հայերեն';
    }

    public function endonymSortable(): string
    {
        return 'ՀԱՅԵՐԵՆ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHy();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
