<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBem;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBem - Bemba
 * @psalm-immutable
 */
class LocaleBem extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ichibemba';
    }

    public function endonymSortable(): string
    {
        return 'ICHIBEMBA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBem();
    }
}
