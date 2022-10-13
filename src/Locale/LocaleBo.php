<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBo;

/**
 * Class LocaleBo - Tibetan
 */
class LocaleBo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'བོད་སྐད་';
    }

    public function language()
    {
        return new LanguageBo();
    }
}
