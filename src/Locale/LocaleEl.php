<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEl;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEl - Greek
 * @psalm-immutable
 */
class LocaleEl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ελληνικά';
    }

    public function endonymSortable(): string
    {
        return 'ΕΛΛΗΝΙΚΆ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEl();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
