<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTi;

/**
 * Class LocaleTi - Tigrinya
 * @psalm-immutable
 */
class LocaleTi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ትግርኛ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTi();
    }
}
