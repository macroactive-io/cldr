<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDz;

/**
 * Class LocaleDz - Dzongkha
 */
class LocaleDz extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'རྫོང་ཁ';
    }

    public function language()
    {
        return new LanguageDz();
    }

    protected function digitsGroup()
    {
        return 2;
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
