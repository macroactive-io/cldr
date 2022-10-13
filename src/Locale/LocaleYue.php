<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageYue;

/**
 * Class LocaleZh - Chinese
 * @psalm-immutable
 */
class LocaleYue extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '粵語';
    }

    public function language(): LanguageInterface
    {
        return new LanguageYue();
    }
}
