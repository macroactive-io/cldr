<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageRw;

/**
 * Class LocaleRw - Kinyarwanda
 * @psalm-immutable
 */
class LocaleRw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kinyarwanda';
    }

    public function endonymSortable(): string
    {
        return 'KINYARWANDA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRw();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
