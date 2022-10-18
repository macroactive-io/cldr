<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEe;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleEe - Ewe
 * @psalm-immutable
 */
class LocaleEe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Eʋegbe';
    }

    public function endonymSortable(): string
    {
        return 'EWEGBE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEe();
    }
}
