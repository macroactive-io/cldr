<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAnn;

/**
 * Class LocaleAnn - Obolo
 *
 * @psalm-immutable
 */
class LocaleAnn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Obolo';
    }

    public function endonymSortable(): string
    {
        return 'OBOLO';
    }

    public function language(): LanguageAnn
    {
        return new LanguageAnn();
    }
}
