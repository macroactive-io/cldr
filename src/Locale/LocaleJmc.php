<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageJmc;

/**
 * Class LocaleJmc - Machame
 * @psalm-immutable
 */
class LocaleJmc extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kimachame';
    }

    public function endonymSortable(): string
    {
        return 'KIMACHAME';
    }

    public function language(): LanguageInterface
    {
        return new LanguageJmc();
    }
}
