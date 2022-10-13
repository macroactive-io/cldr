<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJa;

/**
 * Class LocaleJa - Japanese
 */
class LocaleJa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return '日本語';
    }

    public function language()
    {
        return new LanguageJa();
    }
}
