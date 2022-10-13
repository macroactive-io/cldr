<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTa;

/**
 * Class LocaleTa - Tamil
 * @psalm-immutable
 */
class LocaleTa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'தமிழ்';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTa();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
