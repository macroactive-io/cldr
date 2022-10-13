<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageXh;

/**
 * Class LocaleXh - Xhosa
 */
class LocaleXh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'isiXhosa';
    }

    public function endonymSortable()
    {
        return 'XHOSA';
    }

    public function language()
    {
        return new LanguageXh();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
