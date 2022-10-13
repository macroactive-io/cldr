<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNqo;

/**
 * Class LocaleNko - N'Ko
 */
class LocaleNqo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ߒߞߏ';
    }

    public function language()
    {
        return new LanguageNqo();
    }
}
