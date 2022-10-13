<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHi;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHi - Hindi
 * @psalm-immutable
 */
class LocaleHi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'हिन्दी';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHi();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
