<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageVo;

/**
 * Class LocaleVo - Volapük
 * @psalm-immutable
 */
class LocaleVo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Volapük';
    }

    public function endonymSortable(): string
    {
        return 'VOLAPUK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageVo();
    }
}
