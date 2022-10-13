<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMgo;

/**
 * Class LocaleMgo - Metaʼ
 */
class LocaleMgo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'metaʼ';
    }

    public function endonymSortable()
    {
        return 'META';
    }

    public function language()
    {
        return new LanguageMgo();
    }
}
