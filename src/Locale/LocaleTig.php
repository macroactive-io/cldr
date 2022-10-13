<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTig;

/**
 * Class LocaleTig - Tigre
 */
class LocaleTig extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ትግራይት';
    }

    public function language()
    {
        return new LanguageTig();
    }
}
