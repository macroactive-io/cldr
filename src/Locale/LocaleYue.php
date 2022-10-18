<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageYue;

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
