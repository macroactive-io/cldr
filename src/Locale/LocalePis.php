<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguagePis;

/**
 * Class LocalePis - Pijin
 *
 * @psalm-immutable
 */
class LocalePis extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Pijin';
    }

    public function endonymSortable(): string
    {
        return 'Pijin';
    }

    public function language(): LanguagePis
    {
        return new LanguagePis();
    }
}
