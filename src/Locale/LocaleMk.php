<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMk;

/**
 * Class LocaleMk - Macedonian
 */
class LocaleMk extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'македонски';
    }

    public function endonymSortable()
    {
        return 'МАКЕДОНСКИ';
    }

    public function language()
    {
        return new LanguageMk();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
