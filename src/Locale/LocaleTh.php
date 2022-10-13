<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTh;

/**
 * Class LocaleTh - Thai
 */
class LocaleTh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ไทย';
    }

    public function language()
    {
        return new LanguageTh();
    }
}
