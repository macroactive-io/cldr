<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNd;

/**
 * Class LocaleNd - North Ndebele
 * @psalm-immutable
 */
class LocaleNd extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'isiNdebele';
    }

    public function endonymSortable(): string
    {
        return 'ISINDEBELE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNd();
    }
}
