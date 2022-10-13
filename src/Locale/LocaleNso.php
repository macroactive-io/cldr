<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNso;

/**
 * Class LocaleNso - Northern Sotho
 * @psalm-immutable
 */
class LocaleNso extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Sesotho sa Leboa';
    }

    public function endonymSortable(): string
    {
        return 'SESOTHO SA LEBOA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNso();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
