<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageUz;

/**
 * Class LocaleUz - Uzbek
 * @psalm-immutable
 */
class LocaleUz extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'o‘zbek';
    }

    public function endonymSortable(): string
    {
        return 'OZBEK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageUz();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
