<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguagePt;

/**
 * Class LocalePt - Portuguese
 * @psalm-immutable
 */
class LocalePt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'português';
    }

    public function endonymSortable(): string
    {
        return 'PORTUGUES';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePt();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
