<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSk;

/**
 * Class LocaleSk - Slovak
 */
class LocaleSk extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'slovak_ci';
    }

    public function endonym()
    {
        return 'slovenčina';
    }

    public function endonymSortable()
    {
        return 'SLOVENCINA';
    }

    public function language()
    {
        return new LanguageSk();
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
