<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNd;

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
