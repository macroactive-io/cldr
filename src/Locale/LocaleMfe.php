<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMfe;

/**
 * Class LocaleMfe - Morisyen
 */
class LocaleMfe extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'kreol morisien';
    }

    public function endonymSortable()
    {
        return 'KREOL MORISIEN';
    }

    public function language()
    {
        return new LanguageMfe();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
