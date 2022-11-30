<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNso;

/**
 * Northern Sotho
 *
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

    protected function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
