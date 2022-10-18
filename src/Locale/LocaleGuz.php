<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGuz;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleGuz - Gusii
 * @psalm-immutable
 */
class LocaleGuz extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ekegusii';
    }

    public function endonymSortable(): string
    {
        return 'EKEGUSII';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGuz();
    }
}
