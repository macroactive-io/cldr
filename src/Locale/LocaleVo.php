<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageVo;

/**
 * Class LocaleVo - Volapük
 * @psalm-immutable
 */
class LocaleVo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Volapük';
    }

    public function endonymSortable(): string
    {
        return 'VOLAPUK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageVo();
    }
}
