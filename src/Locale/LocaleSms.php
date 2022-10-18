<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSms;

/**
 * Class LocaleSms
 * @psalm-immutable
 */
class LocaleSms extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'sääʹmǩiõll';
    }

    public function endonymSortable(): string
    {
        return 'SAA MKIOLL';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSms();
    }
}
