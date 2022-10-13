<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMl;

/**
 * Class LocaleMl - Malayalam
 * @psalm-immutable
 */
class LocaleMl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'മലയാളം';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMl();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
