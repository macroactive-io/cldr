<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDv;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleDv - Divehi
 * @psalm-immutable
 */
class LocaleDv extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ތާނަ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDv();
    }
}
