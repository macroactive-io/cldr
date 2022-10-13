<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTs;

/**
 * Class LocaleTs - Tsonga
 * @psalm-immutable
 */
class LocaleTs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Xitsonga';
    }

    public function endonymSortable(): string
    {
        return 'XITSONGA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTs();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
