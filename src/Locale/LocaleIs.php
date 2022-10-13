<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageIs;

/**
 * Class LocaleIs - Icelandic
 * @psalm-immutable
 */
class LocaleIs extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'icelandic_ci';
    }

    public function endonym(): string
    {
        return 'íslenska';
    }

    public function endonymSortable(): string
    {
        return 'ISLENSKA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIs();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
