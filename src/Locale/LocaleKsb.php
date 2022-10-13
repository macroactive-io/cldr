<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKsb;

/**
 * Class LocaleKsb - Shambala
 * @psalm-immutable
 */
class LocaleKsb extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kishambaa';
    }

    public function endonymSortable(): string
    {
        return 'KISHAMBAA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKsb();
    }
}
