<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFil;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFil - Filipino
 * @psalm-immutable
 */
class LocaleFil extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Filipino';
    }

    public function endonymSortable(): string
    {
        return 'FILIPINO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFil();
    }
}
