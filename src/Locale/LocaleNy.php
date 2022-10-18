<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNy;

/**
 * Class LocaleNy - Chewa
 * @psalm-immutable
 */
class LocaleNy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Chichewa';
    }

    public function endonymSortable(): string
    {
        return 'CHICHEWA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNy();
    }
}
