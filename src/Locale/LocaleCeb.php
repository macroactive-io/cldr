<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCeb;

/**
 * Class LocaleCeb - Cebuano
 * @psalm-immutable
 */
class LocaleCeb extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Cebuano';
    }

    public function endonymSortable(): string
    {
        return 'CEBUANO';
    }

    public function language(): LanguageCeb
    {
        return new LanguageCeb();
    }
}
