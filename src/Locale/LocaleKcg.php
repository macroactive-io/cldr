<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKcg;

/**
 * Class LocaleKcg - Tyap
 * @psalm-immutable
 */
class LocaleKcg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tyap';
    }

    public function endonymSortable(): string
    {
        return 'TYAP';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKcg();
    }
}
