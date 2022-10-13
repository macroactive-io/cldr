<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguagePa;

/**
 * Class LocalePa - Punjabi
 * @psalm-immutable
 */
class LocalePa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ਪੰਜਾਬੀ';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePa();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
