<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKam;

/**
 * Class LocaleKam - Kamba
 * @psalm-immutable
 */
class LocaleKam extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kikamba';
    }

    public function endonymSortable(): string
    {
        return 'KIKAMBA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKam();
    }
}
