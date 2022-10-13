<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageYi;

/**
 * Class LocaleYi - Yiddish
 * @psalm-immutable
 */
class LocaleYi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ייִדיש';
    }

    public function language(): LanguageInterface
    {
        return new LanguageYi();
    }
}
