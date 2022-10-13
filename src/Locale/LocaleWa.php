<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageWa;

/**
 * Class LocaleWa - Walloon
 * @psalm-immutable
 */
class LocaleWa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Walon';
    }

    public function endonymSortable(): string
    {
        return 'WALON';
    }

    public function language(): LanguageInterface
    {
        return new LanguageWa();
    }
}
