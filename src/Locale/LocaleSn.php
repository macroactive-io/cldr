<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSn;

/**
 * Class LocaleSn - Shona
 * @psalm-immutable
 */
class LocaleSn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'chiShona';
    }

    public function endonymSortable(): string
    {
        return 'CHISHONA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSn();
    }
}
