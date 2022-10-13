<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageXog;

/**
 * Class LocaleXog - Soga
 * @psalm-immutable
 */
class LocaleXog extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Olusoga';
    }

    public function endonymSortable(): string
    {
        return 'OLUSOGA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageXog();
    }
}
