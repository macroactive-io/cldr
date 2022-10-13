<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageZh;

/**
 * Class LocaleZh - Chinese
 */
class LocaleZh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return '中文';
    }

    public function language()
    {
        return new LanguageZh();
    }
}
