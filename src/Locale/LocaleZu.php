<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageZu;

/**
 * Class LocaleZu - Zulu
 * @psalm-immutable
 */
class LocaleZu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'isiZulu';
    }

    public function endonymSortable(): string
    {
        return 'ISIZULU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageZu();
    }
}
