<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageOr;

/**
 * Class LocaleOr - Oriya
 * @psalm-immutable
 */
class LocaleOr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ଓଡ଼ିଆ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageOr();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
