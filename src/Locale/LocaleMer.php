<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMer;

/**
 * Class LocaleMer - Meru
 * @psalm-immutable
 */
class LocaleMer extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kĩmĩrũ';
    }

    public function endonymSortable(): string
    {
        return 'KIMIRU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMer();
    }
}
