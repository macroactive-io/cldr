<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTeo;

/**
 * Class LocaleTeo - Teso
 * @psalm-immutable
 */
class LocaleTeo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kiteso';
    }

    public function endonymSortable(): string
    {
        return 'KITESO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTeo();
    }
}
