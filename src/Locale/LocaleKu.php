<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKu;

/**
 * Class LocaleKu - Kurdish
 */
class LocaleKu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'kurdî';
    }

    public function endonymSortable()
    {
        return 'KURDI';
    }

    public function language()
    {
        return new LanguageKu();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat()
    {
        return self::PERCENT . '%s';
    }
}
