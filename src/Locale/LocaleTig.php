<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTig;

/**
 * Class LocaleTig - Tigre
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleTig extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ትግራይት';
    }

    public function language()
    {
        return new LanguageTig();
    }
}
