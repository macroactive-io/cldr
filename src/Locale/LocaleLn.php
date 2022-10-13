<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLn;

/**
 * Class LocaleLn - Lingala
 * @psalm-immutable
 */
class LocaleLn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'lingála';
    }

    public function endonymSortable(): string
    {
        return 'LINGALA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLn();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
