<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageYue;
use Fisharebest\Localization\Territory\TerritoryHk;

/**
 * Class LocaleYueHk - Chinese
 * @psalm-immutable
 */
class LocaleYueHk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '粵語';
    }

    public function language(): LanguageInterface
    {
        return new LanguageYue();
    }

    public function territory(): TerritoryHk
    {
        return new TerritoryHk();
    }
}
