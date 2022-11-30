<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguagePcm;

/**
 * Class LocalePcm - Nigerian Pidgin
 * @psalm-immutable
 */
class LocalePcm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Naijíriá Píjin';
    }

    public function endonymSortable(): string
    {
        return 'NAIJÍRIÁ PÍJIN';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePcm();
    }
}
