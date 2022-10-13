<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGd;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGd - Scottish Gaelic
 * @psalm-immutable
 */
class LocaleGd extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Gàidhlig';
    }

    public function endonymSortable(): string
    {
        return 'GAIDHLIG';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGd();
    }
}
