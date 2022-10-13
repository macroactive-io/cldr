<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSt;

/**
 * Class LocaleSt
 * @psalm-immutable
 */
class LocaleSt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Sesotho';
    }

    public function endonymSortable(): string
    {
        return 'SESOTHO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSt();
    }
}
