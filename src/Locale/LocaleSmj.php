<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSmj;

/**
 * Class LocaleSmj
 * @psalm-immutable
 */
class LocaleSmj extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'julevsámegiella';
    }

    public function endonymSortable(): string
    {
        return 'JULEVSAMEGIELLA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSmj();
    }
}
