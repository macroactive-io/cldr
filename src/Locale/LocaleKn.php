<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKn;

/**
 * Class LocaleKn - Kannada
 * @psalm-immutable
 */
class LocaleKn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ಕನ್ನಡ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKn();
    }
}
