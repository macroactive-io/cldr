<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMy;

/**
 * Class LocaleMy - Burmese
 * @psalm-immutable
 */
class LocaleMy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'မြန်မာ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMy();
    }

    protected function minimumGroupingDigits(): int
    {
        return 3;
    }
}
