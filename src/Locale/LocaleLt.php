<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLt;

/**
 * Class LocaleLt - Lithuanian
 */
class LocaleLt extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'lithuanian_ci';
    }

    public function endonym()
    {
        return 'lietuvių';
    }

    public function endonymSortable()
    {
        return 'LIETUVIU';
    }

    public function language()
    {
        return new LanguageLt();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
