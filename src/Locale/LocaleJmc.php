<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageJmc;

/**
 * Class LocaleJmc - Machame
 * @psalm-immutable
 */
class LocaleJmc extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kimachame';
    }

    public function endonymSortable(): string
    {
        return 'KIMACHAME';
    }

    public function language(): LanguageInterface
    {
        return new LanguageJmc();
    }
}
