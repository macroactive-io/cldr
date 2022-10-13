<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageUg;

/**
 * Class LocaleUg - Uyghur
 * @psalm-immutable
 */
class LocaleUg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ئۇيغۇرچە';
    }

    public function language(): LanguageInterface
    {
        return new LanguageUg();
    }
}
