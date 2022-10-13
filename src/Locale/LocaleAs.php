<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAs;

/**
 * Class LocaleAs - Assamese
 */
class LocaleAs extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'অসমীয়া';
    }

    public function language()
    {
        return new LanguageAs();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
