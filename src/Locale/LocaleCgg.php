<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCgg;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleCgg - Chiga
 * @psalm-immutable
 */
class LocaleCgg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Rukiga';
    }

    public function endonymSortable(): string
    {
        return 'RUKIGA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCgg();
    }
}
