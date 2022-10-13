<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBr;

/**
 * Class LocaleBr - Breton
 */
class LocaleBr extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'brezhoneg';
    }

    public function endonymSortable()
    {
        return 'BREZHONEG';
    }

    public function language()
    {
        return new LanguageBr();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
