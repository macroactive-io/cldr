<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAa;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleAa - Afar
 * @psalm-immutable
 */
class LocaleAa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Qafar';
    }

    public function endonymSortable(): string
    {
        return 'QAFAR';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAa();
    }
}
