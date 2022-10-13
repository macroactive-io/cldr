<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageChr;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleChr - Cherokee
 * @psalm-immutable
 */
class LocaleChr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ᏣᎳᎩ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageChr();
    }
}
