<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageIt;

/**
 * Class LocaleIt - Italian
 * @psalm-immutable
 */
class LocaleIt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'italiano';
    }

    public function endonymSortable(): string
    {
        return 'ITALIANO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIt();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
