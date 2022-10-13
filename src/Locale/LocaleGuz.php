<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGuz;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGuz - Gusii
 * @psalm-immutable
 */
class LocaleGuz extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ekegusii';
    }

    public function endonymSortable(): string
    {
        return 'EKEGUSII';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGuz();
    }
}
