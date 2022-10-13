<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKde;

/**
 * Class LocaleKde - Makonde
 * @psalm-immutable
 */
class LocaleKde extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Chimakonde';
    }

    public function endonymSortable(): string
    {
        return 'CHIMAKONDE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKde();
    }
}
