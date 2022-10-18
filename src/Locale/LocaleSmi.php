<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSmi;

/**
 * @psalm-immutable
 */
class LocaleSmi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'saami';
    }

    public function endonymSortable(): string
    {
        return 'SAAMI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSmi();
    }
}
