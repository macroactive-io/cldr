<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAn;

/**
 * Class LocaleAn - Anglo-Saxon / Old-English
 * @psalm-immutable
 */
class LocaleAn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'aragonés';
    }

    public function endonymSortable(): string
    {
        return 'ARAGONÉS';
    }

    public function language(): LanguageAn
    {
        return new LanguageAn();
    }
}
