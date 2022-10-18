<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageYue;
use Macroactive\Cldr\Territory\TerritoryHk;

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
