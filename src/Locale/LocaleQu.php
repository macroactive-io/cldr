<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageQu;

/**
 * Class LocaleQu - Quechua
 */
class LocaleQu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Runasimi';
    }

    public function endonymSortable()
    {
        return 'RUNASIMI';
    }

    public function language()
    {
        return new LanguageQu();
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
