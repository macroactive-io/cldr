<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSaq;

/**
 * Class LocaleSaq - Samburu
 */
class LocaleSaq extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kisampur';
    }

    public function endonymSortable()
    {
        return 'KISAMPUR';
    }

    public function language()
    {
        return new LanguageSaq();
    }
}
