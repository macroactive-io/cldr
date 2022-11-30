<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFrr;

/**
 * Class LocaleFrr - North Frisian
 *
 * @psalm-immutable
 */
class LocaleFrr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Nordfriisk';
    }

    public function endonymSortable(): string
    {
        return 'NORDFRIISK';
    }

    public function language(): LanguageFrr
    {
        return new LanguageFrr();
    }
}
