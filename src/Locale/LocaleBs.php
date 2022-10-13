<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBs;

/**
 * Class LocaleBs - Bosnian
 */
class LocaleBs extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'bosanski';
    }

    public function endonymSortable()
    {
        return 'BOSANSKI';
    }

    public function language()
    {
        return new LanguageBs();
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
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
