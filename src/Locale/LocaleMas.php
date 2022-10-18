<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMas;

/**
 * Class LocaleMas - Masai
 * @psalm-immutable
 */
class LocaleMas extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Maa';
    }

    public function endonymSortable(): string
    {
        return 'MAA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMas();
    }
}
