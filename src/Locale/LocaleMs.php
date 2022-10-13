<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMs;

/**
 * Class LocaleMs - Malay
 * @psalm-immutable
 */
class LocaleMs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Melayu';
    }

    public function endonymSortable(): string
    {
        return 'MELAYU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMs();
    }
}
