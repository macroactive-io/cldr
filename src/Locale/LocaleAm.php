<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAm;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAm - Amharic
 * @psalm-immutable
 */
class LocaleAm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'አማርኛ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAm();
    }
}
