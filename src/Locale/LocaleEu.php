<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEu;

/**
 * Class LocaleEu - Basque
 */
class LocaleEu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'euskara';
    }

    public function endonymSortable()
    {
        return 'EUSKARA';
    }

    public function language()
    {
        return new LanguageEu();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat()
    {
        return self::PERCENT . self::NBSP . '%s';
    }
}
