<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageVun;

/**
 * Class LocaleVun - Vunjo
 * @psalm-immutable
 */
class LocaleVun extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kyivunjo';
    }

    public function endonymSortable(): string
    {
        return 'KYIVUNJO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageVun();
    }
}
