<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGu;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGu - Gujarati
 * @psalm-immutable
 */
class LocaleGu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ગુજરાતી';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGu();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
