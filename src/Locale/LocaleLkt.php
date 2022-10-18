<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageLkt;

/**
 * Lakota
 *
 * @psalm-immutable
 */
class LocaleLkt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Lakȟólʼiyapi';
    }

    public function endonymSortable(): string
    {
        return 'LAKHOLIYAPI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLkt();
    }
}
