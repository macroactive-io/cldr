<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFur;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFur - Friulian
 * @psalm-immutable
 */
class LocaleFur extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'furlan';
    }

    public function endonymSortable(): string
    {
        return 'FURLAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFur();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
