<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageYue;
use Fisharebest\Localization\Territory\TerritoryHk;

/**
 * Class LocaleYueHk - Chinese
 */
class LocaleYueHk extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return '粵語';
    }

    public function language()
    {
        return new LanguageYue();
    }

    public function territory()
    {
        return new TerritoryHk();
    }
}
