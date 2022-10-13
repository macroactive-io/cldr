<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKln;

/**
 * Class LocaleKln - Kalenjin
 * @psalm-immutable
 */
class LocaleKln extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kalenjin';
    }

    public function endonymSortable(): string
    {
        return 'KALENJIN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKln();
    }
}
