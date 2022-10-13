<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMgh;

/**
 * Class LocaleMgh - Makhuwa-Meetto
 * @psalm-immutable
 */
class LocaleMgh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Makua';
    }

    public function endonymSortable(): string
    {
        return 'MAKUA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMgh();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
