<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHaw;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHaw - Hawaiian
 * @psalm-immutable
 */
class LocaleHaw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ʻŌlelo Hawaiʻi';
    }

    public function endonymSortable(): string
    {
        return 'OLELO HAWAII';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHaw();
    }
}
