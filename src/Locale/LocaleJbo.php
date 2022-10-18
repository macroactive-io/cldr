<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageJbo;

/**
 * Class LocalePap - Lojban
 * @psalm-immutable
 */
class LocaleJbo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Lojban';
    }

    public function endonymSortable(): string
    {
        return 'LOJBAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageJbo();
    }
}
