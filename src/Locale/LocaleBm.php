<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBm;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleBm - Bambara
 * @psalm-immutable
 */
class LocaleBm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'bamanakan';
    }

    public function endonymSortable(): string
    {
        return 'BAMANAKAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBm();
    }
}
