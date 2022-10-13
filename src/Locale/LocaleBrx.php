<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBrx;

/**
 * Class LocaleBrx - Bodo
 */
class LocaleBrx extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'बड़ो';
    }

    public function language()
    {
        return new LanguageBrx();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
