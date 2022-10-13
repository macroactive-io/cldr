<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNe;

/**
 * Class LocaleNe - Nepali
 * @psalm-immutable
 */
class LocaleNe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'नेपाली';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNe();
    }
}
